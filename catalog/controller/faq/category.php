<?php
class ControllerFaqCategory extends Controller {
    public function index() {
        $this->load->model('faq/category');
        $this->load->model('tool/image');

        if(isset($this->request->get['category_id'])){
            $this->getSubWithFaq($this->request->get['category_id']);
        } else {
            $this->document->setTitle('Beta');
            $data['categories'] = array();

            $results = $this->model_faq_category->getCategories();

            foreach($results as $category) {
                $data['categories'][] = array(
                    'title' => $category['title'],
                    'subtitle' => $category['subtitle'],
                    'image' => $this->model_tool_image->resize($category['image'] ? $category['image'] : 'no_image.png', 100, 100),
                    'href' => $this->url->link('faq/category', 'category_id=' . $category['faq_category_id'])
                );
            }
            $data['contact_us_component'] = $this->load->controller('faq/contact_us_component');
            
            $data['footer'] = $this->load->controller('common/footer');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['header'] = $this->load->controller('common/header');
            $this->response->setOutput($this->load->view('faq/category_list', $data));
        }
    }

    public function getSubWithFaq($category_id) {
        $data['category_info'] = $this->model_faq_category->getCategoryById($category_id);
        $this->document->setTitle($data['category_info']['title'] . ' - Beta');
         
        $results = $this->model_faq_category->getSubCategoriesById($category_id);

        foreach($results as $category) {

            $faqs = $this->model_faq_category->getFaqByCategory($category['faq_category_id']);
            $faq2 = array();
        
            foreach($faqs as $faq) {
                $faq2[] = array(
                    'faq_id' => $faq['faq_id'],
                    'faq_category_id' => $faq['faq_category_id'],
                    'title' => $faq['title'],
                    'href' => $this->url->link('faq/faq', 'faq_id=' . $faq['faq_id'])
                );
            }
        
            $data['subcategories'][] = array(
                'title' => $category['title'],
                'faq_category_id' => $category['faq_category_id'],
                'faqs' => $faq2
            );
        }

        $data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => 'Beta',
			'href' => $this->url->link('faq/category')
		);
		$data['breadcrumbs'][] = array(
			'text' => $data['category_info']['title'],
			'href' => $this->url->link('account/account', '', true)
		);

        $data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
        $this->response->setOutput($this->load->view('faq/subcategories_with_faqs', $data));
    }

}