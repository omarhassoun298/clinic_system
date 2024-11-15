<?php

class ControllerExtensionModuleHomeCustom2 extends Controller {
    public function index() {
        $data = array();

        if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

        $data['img1'] = $server . 'image/catalog/home/sarwa_icon.svg';
        $data['img2'] = $server . 'image/catalog/home/faq.svg';

		return $this->load->view('extension/module/home/custom2', $data);
	}
}