<?php
class ControllerFaqFaq extends Controller {
    public function index() {
        $this->load->model('faq/faq');
        $this->load->model('tool/image');

        if(isset($this->request->get['faq_id'])){
            
            $this->document->setTitle('Beta');
            $data['categories'] = array();

            $faq = $this->model_faq_faq->getFaqById($this->request->get['faq_id']);
            $data['faq'] = array(
                'title' => $faq['title'],
                'faq_category_id'=>$faq['faq_category_id'],
                'text' => html_entity_decode($faq['text'], ENT_QUOTES, 'UTF-8')
            );
            $data['breadcrumbs'] = array();
            $data['breadcrumbs'][] = array(
                'text' => 'Beta',
                'href' => $this->url->link('faq/category')
            );
            $data['breadcrumbs'][] = array(
                'text' => $faq['grand_parent_title'],
                'href' => $this->url->link('faq/category', 'category_id=' . $faq['grand_parent_id'])
            );
            $data['breadcrumbs'][] = array(
                'text' => $faq['parent_title'],
                'href' => $this->url->link('faq/faq', 'faq_id=' . $faq['faq_id'])
            );
            $faq_category = $this->model_faq_faq-> getFaqByCategory($faq['faq_category_id']);

            foreach($faq_category as $faq) {
                $data['faq_category'][] = array(
                    'faq_id' => $faq['faq_id'],
                    'faq_category_id' => $faq['faq_category_id'],
                    'title' => $faq['title'],
                    'href' => $this->url->link('faq/faq', 'faq_id=' . $faq['faq_id'])
                );
            }

            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');
            $this->response->setOutput($this->load->view('faq/faq', $data));
        }
    }
    }
