<?php

class ControllerExtensionModuleHomeCustom1 extends Controller {
    public function index() {
        $data = array();

        if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

        $data['img1'] = $server . 'image/catalog/swing.png';
        $data['googleplay'] = $server . 'image/catalog/badge-google-play-store-en.png';
        $data['appstore'] = $server . 'image/catalog/badge-app-store.svg';

		return $this->load->view('extension/module/home/custom1', $data);
	}
}