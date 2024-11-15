<?php
/**
 * guest.php
 *
 * Guest customer management
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/results/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestInvestmentForm extends RestController
{

    public function investment()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {      
            $post = $this->getPost();
            $this->addInvestment($post);
        }else if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $this->getInvestments();
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("POST");
        }

        return $this->sendResponse();
    }


    public function addInvestment($post){
        $this->load->model('rest/investment_form');
        
        if ($this->model_rest_investment_form->getTotalInvestmentsByEmail($post['email'])) {
            $this->json['error'][] = 'This email is already exists';
        }else if($this->model_rest_investment_form->getTotalInvestmentsByTelephone($post['telephone'])){
            $this->json['error'][] = 'This telephone is already exists';
        }else{
            if($post["investment_key1"] == $post["investment_key2"]){
                $type = $post["investment_key1"];
            }elseif($post["investment_key1"] == $post["investment_key3"]){
                $type = $post["investment_key1"];
            }elseif($post["investment_key2"] == $post["investment_key2"]){
                $type = $post["investment_key2"];
            }else{
                $type = 'Equity';
            }

            $this->model_rest_investment_form->addInvestment($post,$type);
        }
    }

    public function getInvestments(){
        $this->load->model('rest/investment_form');

        $results = $this->model_rest_investment_form->getInvestments();


        foreach($results as $result){
            $this->json['data'][] = array( 
                'name' => $result['name'],
                'email' => $result['email'],
                'telephone' => $result['telephone'],
                'type' => $result['type']
            );
        }
    }
}   