<?php

/**
 * forgotten.php
 *
 * Forgotten password
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestForgotten extends RestController
{

    /*
    * forgotten password
    */
    public function forgotten()
    {

        $this->checkPlugin();


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if ($this->customer->isLogged()) {
                $this->json['error'][] = "User is already logged";
                $this->statusCode = 400;
            } else {
                $this->load->model('account/customer');
                $this->load->language('account/forgotten');

                $post = $this->getPost();
                $error = $this->validate($post);

                if (empty($error)) {
                    $code = token(40);
                    $this->model_account_customer->editCode($post['email'], $code);

                    $customer = $this->model_account_customer->getCustomerByEmail($post['email']);
                    $this->session->data['reset_password'] = 'reset_password';
                    $this->session->data['email'] = $post['email'];
                    $this->session->data['code'] = $code;
                    $this->session->data['otp'] = str_pad(rand(0, pow(10, 4) - 1), 4, '0', STR_PAD_LEFT);
                    $this->json['data']['navigate'] = 'otp-'.$this->session->data['otp'];
                    $this->json['data']['telephone'] = substr_replace($customer['telephone'], str_repeat('*', strlen($customer['telephone']) - 2), 0, -2);
                } else {
                    $this->json["error"] = $error;
                    $this->statusCode = 400;
                }
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        return $this->sendResponse();

    }

    protected function validate($post)
    {
        $error = array();
        if (!isset($post['email'])) {
            $error[] = $this->language->get('error_email');
        } elseif (!$this->model_account_customer->getTotalCustomersByEmail($post['email'])) {
            $error[] = $this->language->get('error_email');
        }
        return $error;
    }

    public function reset() {
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->language('account/password');
    
            if ($this->customer->isLogged()) {
                $this->json['error'][] = "User is already logged";
                $this->statusCode = 400;
            } else {
                $post = $this->getPost();
    
                if(empty($this->session->data['code']) || empty($this->session->data['email'])) {
                    $this->json['error'][] = "An error occured!";
                } else {
                    $this->load->model('account/customer');
                    $customer_info = $this->model_account_customer->getCustomerByCode($this->session->data['code']);
                    if (!$customer_info) {
                        $this->json['error'][] = "An error occured!";
                    }
                }
    
                if(empty($this->json['error'])) {
                    if (!isset($post['password']) || (utf8_strlen($post['password']) < 4) || (utf8_strlen($post['password']) > 20)) {
                        $this->json["error"][] = $this->language->get('error_password');
                    }
        
                    if (!isset($post['confirm']) || (isset($post['password']) && $post['confirm'] != $post['password'])) {
                        $this->json["error"][] = $this->language->get('error_confirm');
                    }
        
                    if (empty($this->json["error"])) {
                        $this->json['data']['navigate'] = 'login';
                        $this->model_account_customer->editPassword($this->session->data['email'], $post['password']);
                    }
                } else {
                    $this->statusCode = 400;
                }
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        return $this->sendResponse();
    }
}
