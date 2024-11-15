<?php
/**
 * order.php
 *
 * Orders management
 *
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestFaqCategory extends RestController
{

    public function category(){
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($this->request->get['id'])) {

            if (isset($this->request->get['id']) && ctype_digit($this->request->get['id'])) {
              $this->getSubCategory($this->request->get['id']);
            } 
        } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
           $this->getCategories();
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        $this->sendResponse();
    }

    public function faq(){
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($this->request->get['faq_id'])) {

            if (isset($this->request->get['faq_id']) && ctype_digit($this->request->get['faq_id'])) {
              $this->getFaqById($this->request->get['faq_id']);
            } 
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        $this->sendResponse();
    }

    public function getContactUsImage(){
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
              $this->getContactUsComponent();
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        $this->sendResponse();
    }

    public function getContactUsComponent(){
        $this->load->model('setting/setting');
        $this->load->model('tool/image');

            if (!empty($this->config->get('module_contact_us_component_image')) && is_file(DIR_IMAGE . $this->config->get('module_contact_us_component_image'))) {
                $image = $this->model_tool_image->resize($this->config->get('module_contact_us_component_image'), 100, 100);
            } else {
                $image = $this->model_tool_image->resize('no_image.png', 100, 100);
            }
            $this->json['data'] = array(
                'title' => $this->config->get('module_contact_us_component_title'),
                'subtitle' => $this->config->get('module_contact_us_component_subtitle'),   
                'button_name' => $this->config->get('module_contact_us_component_buttonname'),
                'image' => $image
            );
    }
    public function getCategories(){
        $this->load->model('faq/category');
        $this->load->model('tool/image');

        $results = $this->model_faq_category->getCategories();

        foreach ($results as $result) {
            if (!empty($result['image']) && is_file(DIR_IMAGE . $result['image'])) {
                $image = $this->model_tool_image->resize($result['image'], 100, 100);
            } else {
                $image = $this->model_tool_image->resize('no_image.png', 100, 100);
            }
            $this->json['data'][] = array(
                'faq_category_id' => $result['faq_category_id'],
                'title' => $result['title'],
                'subtitle' => $result['subtitle'],   
                'image' => $image
            );
        }
    }

    public function getSubCategory($category_id){
        $this->load->model('faq/category');

        $category_info = $this->model_faq_category->getCategoryById($category_id);

        $results = $this->model_faq_category->getSubCategoriesById($category_id);
        foreach($results as $category) {

            $faqs = $this->model_faq_category->getFaqByCategory($category['faq_category_id']);
            $faq2 = array();
        
            foreach($faqs as $faq) {
                $faq2[] = array(
                    'faq_id' => $faq['faq_id'],
                    'faq_category_id' => $faq['faq_category_id'],
                    'title' => $faq['title'],
                );
            }
        
            $this->json['data'][] = array(
                'title' => $category['title'],
                'faq_category_id' => $category['faq_category_id'],
                'faqs' => $faq2
            );

            $this->json['category'] = array(
                'title' => $category_info['title'],
                'subtitle' => $category_info['subtitle']
            );
        }        
    }

    public function getFaqById($faq_id){
        $this->load->model('faq/faq');
        $this->load->model('tool/image');

        if(isset($faq_id)){
            $faq = $this->model_faq_faq->getFaqById($faq_id);
 
            $data['breadcrumbs'] = array(
                'grand_parent_title' => $faq['grand_parent_title'],
                'grand_parent_id' => $faq['grand_parent_id'],
                'parent_title' => $faq['parent_title'],
            );
            
            $data['faq'] = array(
                'title' => $faq['title'],
                'faq_category_id'=>$faq['faq_category_id'],
                'text' => html_entity_decode($faq['text'], ENT_QUOTES, 'UTF-8')
            );
            $faq_category = $this->model_faq_faq-> getFaqByCategory($faq['faq_category_id']);

            foreach($faq_category as $faq) {
                $data['faq_by_category'][] = array(
                    'faq_id' => $faq['faq_id'],
                    'faq_category_id' => $faq['faq_category_id'],
                    'title' => $faq['title'],
                );
            }
            $this->json['data'] = $data ;
        }

    }
}