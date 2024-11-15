<?php
class ControllerFaqContactUsComponent extends Controller {
	private $error = array();

	public function index() {
        $data['title'] = $this->config->get('module_contact_us_component_title');

        $data['subtitle'] = $this->config->get('module_contact_us_component_subtitle');
    

        $data['buttonname'] = $this->config->get('module_contact_us_component_buttonname');
         $data['link']=$this->url->link('information/contact', 'user_token=' . $this->session->data['user_token'], true);
		$url_prefix = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;

        $image = $this->config->get('module_contact_us_component_image');

		$data['thumb'] = $url_prefix . 'image/'.$image;
	
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);


		return $this->load->view('faq/contact_us_component', $data);
	}
}