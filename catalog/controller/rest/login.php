<?php

/**
 * login.php
 *
 * Login management
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestLogin extends RestController
{

    const FACEBOOK_USER_INFORMATION_URL = 'https://graph.facebook.com/me?fields=email,name';
    const GOOGLE_USER_INFORMATION_URL = 'https://www.googleapis.com/plus/v1/people/me';

    public function login(){
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $post = $this->getPost();

            $this->language->load('checkout/checkout');

            if ($this->customer->isLogged()) {
                $this->json['error'][] = "User is logged.";
                $this->statusCode = 400;
            } else {
                if (!$this->customer->login($post['email'], $post['password'])) {
                    $this->json['error'][] = $this->language->get('error_login');
                    $this->statusCode = 403;
                } else {
                    $this->load->model('account/customer');

                    $email = $post['email'];

                    $customer_info = $this->model_account_customer->getCustomerByEmail($email);

                    if ($customer_info && !$customer_info['status']) {
                        $this->json['error'][] = $this->language->get('error_approved');
                        $this->statusCode = 403;
                    }
                }
            }

            if (empty($this->json['error'])) {
                $this->json["data"] = $this->customer->getCustomer();
            }

        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        $this->sendResponse();
    }

    public function sociallogin(){
        $this->checkPlugin();

        $customer_info = array();

        $firstname = "";
        $lastname = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $input = file_get_contents('php://input');
            $post = json_decode($input, true);

            $this->language->load('checkout/checkout');

            if ($this->customer->isLogged()) {
                $this->json['error'][] = "User is logged.";
                $this->statusCode = 400;
            }

            if (empty($this->json['error'])) {
                $this->load->model('account/customer');

                $customer_info = $this->model_account_customer->getCustomerByEmail($post['email']);

                if (!isset($post['provider']) || ($post['provider'] != 'facebook' && $post['provider'] != 'google' && $post['provider'] != 'apple')) {
                    $this->json['error'][] = "Invalid social provider. Valid providers: facebook, google";
                    $this->statusCode = 400;
                }

                if (isset($post['provider']) && ($post['provider'] == 'facebook' || $post['provider'] == 'google' || $post['provider'] == 'apple')) {
                    if (isset($post['social_access_token'])) {
                        $access_token = $post['social_access_token'];
                    } else {
                        $access_token = $post['social_access_token'];
                    }
                }

                $name = $post['name'];
                $parts = explode(' ', $name);
                $firstname = $parts[0];
                $lastname = isset($parts[1]) ? $parts[1] : '';

                if (empty($this->json['error'])) {
                    if (!$customer_info) {
                        $data['email'] = $post['email'];
                        $data['firstname'] = $firstname;
                        $data['lastname'] = $lastname;
                        $data['telephone'] = "";
                        $data['address_1'] = "";
                        $data['city'] = "";
                        $data['postcode'] = "";
                        $data['country'] = "";
                        $data['zone_id'] = "";
                        $data['fax'] = "";
                        $data['company'] = "";
                        $data['address_2'] = "";
                        $data['country_id'] = "";
                        $data['approved'] = 1;
                        $data['status'] = 1;
                        $data['password'] = md5(microtime());

                        $this->model_account_customer->addCustomer($data);
                        $customer_info = $this->model_account_customer->getCustomerByEmail($post['email']);
                    }

                    if ($customer_info) {
                        if (!$this->customer->login($post['email'], "", true)) {
                            $this->json['error'][] = $this->language->get('error_login');
                            $this->statusCode = 400;
                        }
                    }

                    if ($customer_info && !$customer_info['status']) {
                        $this->json['error'][] = $this->language->get('error_approved');
                        $this->statusCode = 400;
                    }
                }
            }

            if (empty($this->json['error']) && !empty($customer_info)) {
                $this->json["data"] = $this->customer->getCustomer();
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        $this->sendResponse();
    }

    private function requestUserDataFromProvider($provider, $access_token) {
        $ch = curl_init();
        if($provider == 'facebook'){
            curl_setopt($ch, CURLOPT_URL, static::FACEBOOK_USER_INFORMATION_URL);

        } elseif ($provider == 'google') {
            curl_setopt($ch, CURLOPT_URL, static::GOOGLE_USER_INFORMATION_URL);
        }

        $headers = array("Authorization: Bearer " . $access_token);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

        // execute the CURL request.
        $data = curl_exec($ch);
        if(!curl_errno($ch)){
            curl_close($ch);
            $ret = json_decode($data, true);

            if ($provider == 'google') {
                $ret["email"] = $ret['emails'][0]['value'];
                $ret["name"] = $ret['displayName'];
            }

            return $ret;
        } else {
            curl_close($ch);
            return NULL;
        }
    }
}