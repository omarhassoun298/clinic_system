<?php
class ControllerExtensionModuleContactUsComponent extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/contact_us_component');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_contact_us_component', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

		    $this->response->redirect($this->url->link('extension/module/contact_us_component', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if(isset($this->session->data['success'])){
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}else{
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/contact_us_component', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/contact_us_component', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('extension/module/contact_us_component', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		if (isset($this->request->post['module_contact_us_component_title'])) {
			$data['module_contact_us_component_title'] = $this->request->post['module_contact_us_component_title'];
		} else {
			$data['module_contact_us_component_title'] = $this->config->get('module_contact_us_component_title');
		}
        if (isset($this->request->post['module_contact_us_component_subtitle'])) {
			$data['module_contact_us_component_subtitle'] = $this->request->post['module_contact_us_component_subtitle'];
		} else {
			$data['module_contact_us_component_subtitle'] = $this->config->get('module_contact_us_component_subtitle');
		}
        if (isset($this->request->post['module_contact_us_component_buttonname'])) {
			$data['module_contact_us_component_buttonname'] = $this->request->post['module_contact_us_component_buttonname'];
		} else {
			$data['module_contact_us_component_buttonname'] = $this->config->get('module_contact_us_component_buttonname');
		}
        if (isset($this->request->post['module_contact_us_component_image'])) {
			$image = $this->request->post['module_contact_us_component_image'];
		} else {
			$image = $this->config->get('module_contact_us_component_image');
		}

		$data['module_contact_us_component_image'] = $image;

		$this->load->model('tool/image');
	
	
		if (!empty($image) && is_file(DIR_IMAGE . $image)) {
			$data['thumb'] = $this->model_tool_image->resize($image, 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/contact_us_component', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/contact_us_component')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}