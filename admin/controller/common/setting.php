<?php
class ControllerCommonSetting extends Controller {
    private $error = array();

	public function index() {
		$this->load->language('common/setting');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->request->post['module_setting_default_iso_code_2'] = $this->db->query("SELECT iso_code_2 FROM `".DB_PREFIX."country` WHERE country_id = '".$this->request->post['module_setting_default_country_id']."'")->row['iso_code_2'];

			$this->model_setting_setting->editSetting('module_setting', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('common/setting', 'user_token=' . $this->session->data['user_token'], true));
		}

        if(isset($this->session->data['success'])){
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

        $data['user_token'] = $this->session->data['user_token'];

        
		$this->load->model('localisation/country');
		$data['countries'] = $this->model_localisation_country->getCountries();

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/setting', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('common/setting', 'user_token=' . $this->session->data['user_token'], true);

        if (isset($this->request->post['module_setting_nationalities'])) {
			$data['module_setting_nationalities'] = $this->request->post['module_setting_nationalities'];
		} else {
			$data['module_setting_nationalities'] = $this->config->get('module_setting_nationalities');
		}

        if (isset($this->request->post['module_setting_default_country_id'])) {
			$data['module_setting_default_country_id'] = $this->request->post['module_setting_default_country_id'];
		} else {
			$data['module_setting_default_country_id'] = $this->config->get('module_setting_default_country_id');
		}

		if (isset($this->request->post['module_setting_default_zone_id'])) {
			$data['module_setting_default_zone_id'] = (int)$this->request->post['module_setting_default_zone_id'];
		} else {
			$data['module_setting_default_zone_id'] = (int)$this->config->get('module_setting_default_zone_id');
		}

        if (isset($this->request->post['module_setting_default_nationality'])) {
			$data['module_setting_default_nationality'] = $this->request->post['module_setting_default_nationality'];
		} else {
			$data['module_setting_default_nationality'] = $this->config->get('module_setting_default_nationality');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/setting', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'common/setting')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

}