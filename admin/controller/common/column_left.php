<?php
class ControllerCommonColumnLeft extends Controller {
	public function index() {
		if (isset($this->request->get['user_token']) && isset($this->session->data['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$this->load->language('common/column_left');
			$data['menus'][] = [
				'id'       => 'menu-dashboard',
				'icon'	   => 'fas fa-home',
				'name'	   => $this->language->get('text_dashboard'),
				'href'     => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token']),
				'children' => []
			];
			
			$setting = [];
			if ($this->user->hasPermission('access', 'common/setting')) {
				$setting[] = [
					'name'	   => $this->language->get('text_setting'),
					'href'     => $this->url->link('common/setting', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}

			if ($this->user->hasPermission('access', 'common/broker')) {
				$setting[] = [
					'name'	   => 'Broker',
					'href'     => $this->url->link('common/broker', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}
			
			if ($this->user->hasPermission('access', 'localisation/country')) {
				$setting[] = array(
					'name'	   => $this->language->get('text_country'),
					'href'     => $this->url->link('localisation/country', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'localisation/zone')) {
				$setting[] = array(
					'name'	   => $this->language->get('text_zone'),
					'href'     => $this->url->link('localisation/zone', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}
			if ($setting) {
				$data['menus'][] = [
					'id'       => 'menu-setting',
					'icon'	   => 'fas fa-cog',
					'name'	   => 'Setting',
					'href'     => '',
					'children' => $setting
				];
			}
			//doctor
			if ($this->user->hasPermission('access', 'clinic/doctor')) {
				$data['menus'][] = [
					'id'       => 'menu-doctor',
					'icon'	   => 'fa-solid fa-user-doctor',
					'name'	   => 'Doctor',
					'href'     =>  $this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'], true),
				];
			}

			//patient
			if ($this->user->hasPermission('access', 'clinic/patient')) {
				$data['menus'][] = [
					'id'       => 'menu-patient',
					'icon'	   => 'fa-solid fa-person',
					'name'	   => 'Patient',
					'href'     =>  $this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'], true),
				];
			}

			// Catalog
			$catalog = [];
			if ($this->user->hasPermission('access', 'catalog/category')) {
				$catalog[] = [
					'name'	   => $this->language->get('text_category'),
					'href'     => $this->url->link('catalog/category', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}
			if ($this->user->hasPermission('access', 'catalog/information')) {
				$catalog[] = [
					'name'	   => $this->language->get('text_information'),
					'href'     => $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}

			if ($catalog) {
				$data['menus'][] = [
					'id'       => 'menu-catalog',
					'icon'	   => 'fa-solid fa-tag',
					'name'	   => $this->language->get('text_catalog'),
					'href'     => '',
					'children' => $catalog
				];
			}

			$faq = array();
			if ($this->user->hasPermission('access', 'catalog/faq_category')) {
				$faq[] = array(
					'name'	   => 'Category',
					'href'     => $this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($this->user->hasPermission('access', 'catalog/faq')) {
				$faq[] = array(
					'name'     => 'FAQS',
					'href'     => $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}
			if ($this->user->hasPermission('access', 'extension/module/contact_us_component')) {
				$faq[] = array(
					'name'     => 'Contact Us',
					'href'     => $this->url->link('extension/module/contact_us_component', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($faq) {
				$data['menus'][] = array(
					'id'       => 'menu-catalog',
					'icon'	   => 'fa-solid fa-question',
					'name'	   => 'FAQS',
					'href'     => '',
					'children' => $faq
				);
			}

			//blog
			if ($this->user->hasPermission('access', 'blog/blog')) {
				$blog[] = array(
					'name'	   => 'Blog',
					'href'     => $this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}
			if ($this->user->hasPermission('access', 'blog/keyword')) {
				$blog[] = array(
					'name'	   => 'Keywords',
					'href'     => $this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($blog) {
				$data['menus'][] = array(
					'id'       => 'menu-blog',
					'icon'	   => 'fa-solid fa-blog',
					'name'	   => 'Blog',
					'href'     => '',
					'children' => $blog
				);
			}
			// Extension
			$marketplace = array();

			if ($this->user->hasPermission('access', 'marketplace/modification')) {
				$marketplace[] = array(
					'name'	   => $this->language->get('text_modification'),
					'href'     => $this->url->link('marketplace/modification', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()
				);
			}

			if ($marketplace) {
				$data['menus'][] = array(
					'id'       => 'menu-extension',
					'icon'	   => 'fas fa-puzzle-piece',
					'name'	   => $this->language->get('text_extension'),
					'href'     => '',
					'children' => $marketplace
				);
			}
			// Customer
			$customer = [];

			if ($this->user->hasPermission('access', 'customer/customer')) {
				$customer[] = [
					'name'	   => $this->language->get('text_customer'),
					'href'     => $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}

			if ($this->user->hasPermission('access', 'customer/customer_group')) {
				$customer[] = [
					'name'	   => $this->language->get('text_customer_group'),
					'href'     => $this->url->link('customer/customer_group', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}

			if ($customer) {
				$data['menus'][] = [
					'id'       => 'menu-customer',
					'icon'	   => 'fas fa-user',
					'name'	   => $this->language->get('text_customer'),
					'href'     => '',
					'children' => $customer
				];
			}

				// System
				$system = [];

				if ($this->user->hasPermission('access', 'setting/setting')) {
					$system[] = [
						'name'	   => $this->language->get('text_setting'),
						'href'     => $this->url->link('setting/setting', 'user_token=' . $this->session->data['user_token']),
						'children' => []
					];
				}
				if ($this->user->hasPermission('access', 'localisation/language')) {
					$system[] = [
						'name'	   => $this->language->get('text_language'),
						'href'     => $this->url->link('localisation/language', 'user_token=' . $this->session->data['user_token']),
						'children' => []
					];
				}
				// Users
				$user = [];

				if ($this->user->hasPermission('access', 'user/user')) {
					$user[] = [
						'name'	   => $this->language->get('text_users'),
						'href'     => $this->url->link('user/user', 'user_token=' . $this->session->data['user_token']),
						'children' => []
					];
				}
	
				if ($this->user->hasPermission('access', 'user/user_permission')) {
					$user[] = [
						'name'	   => $this->language->get('text_user_group'),
						'href'     => $this->url->link('user/user_permission', 'user_token=' . $this->session->data['user_token']),
						'children' => []
					];
				}
	
				if ($user) {
					$system[] = [
						'name'	   => $this->language->get('text_users'),
						'href'     => '',
						'children' => $user
					];
				}
				if ($this->user->hasPermission('access', 'tool/log')) {
					$system[] = array(
						'name'	   => $this->language->get('text_log'),
						'href'     => $this->url->link('tool/log', 'user_token=' . $this->session->data['user_token'], true),
						'children' => array()
					);
				}
				if ($system) {
					$data['menus'][] = [
						'id'       => 'menu-system',
						'icon'	   => 'fas fa-cog',
						'name'	   => $this->language->get('text_system'),
						'href'     => '',
						'children' => $system
					];
				}
			return $this->load->view('common/column_left', $data);
		}
	}
}
