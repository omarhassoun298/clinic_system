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

class ControllerRestBroker extends RestController
{

    public function broker()
    {

        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {      

            if (isset($this->request->get['broker_id']) && ctype_digit($this->request->get['broker_id'])) {
                $this->getBrokerById($this->request->get['broker_id']);
            } else {
                $this->getBrokers();
            }
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        return $this->sendResponse();
    }

    public function getBrokerById($broker_id){
        $this->load->model('rest/broker');
        $results = $this->model_rest_broker->getBroker($broker_id);

        if(!empty($results['image'])){
            $image = $this->urlPrefix.'image/'.$results['image'];
        }else{
            $image = $this->urlPrefix.'image/cache/no_image-100x100.png';
        }
        $this->json['data'][] = array(
            'broker_id' => $results['broker_id'],
            'title' => $results['title'],
            'url' => $results['url'],
            'description' => $results['description'],
            'image' => $image,
        );
    }

    public function getBrokers(){
        $this->load->model('rest/broker');
        $filter_data = array(
            'sort'  => 'broker_id',
            'order' => 'ASC',
            'page'  => 1,
            'start' => 1,
            'limit' => $this->config->get('config_limit_admin')
        );

        if (isset($this->request->get['limit']) && ctype_digit($this->request->get['limit'])) {
            $filter_data['limit'] = $this->request->get['limit'];
        }

        if (isset($this->request->get['filter_title'])) {
            $filter_data['filter_title'] = $this->request->get['filter_title'];
        }

        if (isset($this->request->get['page']) && ctype_digit($this->request->get['page'])) {
            $filter_data['start'] = $this->request->get['page'];
            $filter_data['page'] = $this->request->get['page'];
        }

        $filter_data['start'] = ($filter_data['start'] - 1) * $filter_data['limit'];
        $results = $this->model_rest_broker->getBrokers($filter_data);

        foreach ($results as $result) {
            $this->json['data']['brokers'][] = array(
                'broker_id' => $result['broker_id'],
                'title' => $result['title'],
                'url' => $result['url'],
                'type' => $result['type'],
                'location' => $result['location'],
                'description' => $result['description'],
                'image' => $this->urlPrefix.'image/'.$result['image']
            );
        }

        $total = $this->model_rest_broker->getTotalBrokers($filter_data);
        $this->json['data']['total_brokers'] = (int)$total;
        $this->json['data']['current_page'] = (int)$filter_data['page'];
        $this->json['data']['pages'] = ceil($total / $filter_data['limit']);
    }
}   