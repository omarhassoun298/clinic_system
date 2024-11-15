<?php
/**
 * register.php
 *
 * Registration management
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestRegister extends RestController
{

    public function register()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //add customer
            $post = $this->getPost();
            $this->registerCustomer($post);
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        return $this->sendResponse();
    }


    public function registerCustomer($data){
        $this->language->load('checkout/checkout');
        $this->language->load('checkout/cart');
        $this->load->model('account/customer');
      
        if ($this->customer->isLogged()) {
            $this->json['error'][] = "User is logged.";
            $this->statusCode = 400;
        } else {
            if (empty($this->json['error'])) {
                if (!isset($data['firstname']) || (utf8_strlen(trim($data['firstname'])) < 1) || (utf8_strlen(trim($data['firstname'])) > 32)) {
                    $this->json['error'][] = $this->language->get('error_firstname');
                }

                if (!isset($data['lastname']) || (utf8_strlen(trim($data['lastname'])) < 1) || (utf8_strlen(trim($data['lastname'])) > 32)) {
                    $this->json['error'][] = $this->language->get('error_lastname');
                }

                if (!isset($data['email']) || (utf8_strlen($data['email']) > 96) || !preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $data['email'])) {
                    $this->json['error'][] = $this->language->get('error_email');
                } else {
                    if ($this->model_account_customer->getTotalCustomersByEmail($data['email'])) {
                        $this->json['error'][] = $this->language->get('error_exists');
                    }
                }

                //telephone validation
                if (!isset($data['telephone']) || (utf8_strlen($data['telephone']) < 3) || (utf8_strlen($data['telephone']) > 32)) {
                    $this->json['error'][] = $this->language->get('error_telephone');
                }  else {
                    if ($this->model_account_customer->getTotalCustomersByTelephone($data['telephone'])) {
                        $this->json['error'][] = $this->language->get('error_telephone_exists');
                    }
                }

                if (!isset($data['password']) || (utf8_strlen($data['password']) < 4) || (utf8_strlen($data['password']) > 20)) {
                    $this->json['error'][] = $this->language->get('error_password');
                }

                if (!isset($data['confirm']) || $data['confirm'] != $data['password']) {
                    $this->json['error'][] = $this->language->get('error_confirm');
                }
            }

            if (empty($this->json['error'])) {
                $this->session->data['register_data'] = $data;
                $this->session->data['otp'] = str_pad(rand(0, pow(10, 4) - 1), 4, '0', STR_PAD_LEFT);
                $this->json['data']['otp'] =  $this->session->data['otp'];
            }
        }
    }
    public function verifyOtp() {
        try {
            $this->checkPlugin();

            $this->load->model('account/customer');
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $post = $this->getPost();
    
                if(empty($post['otp'])){
                    $this->json['error'][] = 'Otp is required!';
                } elseif($post['otp'] != $this->session->data['otp']) {
                    $this->json['error'][] = 'Otp is invalid!';
                }
    
                if (empty($this->json['error'])) {

                    if(isset($this->session->data['register_data']) && !$this->customer->isLogged()) {
                        $this->model_account_customer->addCustomer($this->session->data['register_data']);
                        $this->customer->login($this->session->data['register_data']['email'], $this->session->data['register_data']['password']);
                    } 

                    if(isset($this->session->data['telephone']) && $this->customer->isLogged()) {
                        $this->db->query("UPDATE `".DB_PREFIX."customer` SET telephone = '".$this->db->escape($this->session->data['telephone'])."' WHERE customer_id = '".$this->customer->getId()."'");
                        $this->customer->refreshCustomer();
                    }

                    if(isset($this->session->data['reset_password']) && !$this->customer->isLogged()) {
                        $this->session->data['can_reset_password'] = $this->session->data['email'];
                    }

                    unset($this->session->data['otp']);
                    unset($this->session->data['telephone']);
                    unset($this->session->data['register_data']);
                    unset($this->session->data['reset_password']);

                    $this->json['success'] = 1;
                    $this->json['data'] = $this->customer->getCustomer();
                }
            } else {
                $this->statusCode = 405;
                $this->allowedHeaders = array("POST");
            }

        } catch (Exception $e) {
            $this->json['error'][] = $e->getMessage();
        } catch (Error $e) {
            $this->json['error'][] = $e->getMessage();
        }
        
        return $this->sendResponse();
    }
}