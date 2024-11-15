<?php
class ControllerCatalogFaq extends Controller
{
	private $error = array();

	public function index()
	{
		$this->load->language('catalog/faq');
		$this->load->model('catalog/faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();
	}

	public function add()
	{
		$this->load->language('catalog/faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/faq');

		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_catalog_faq->addFaq($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int) $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}


	public function edit()
	{
		$this->load->language('catalog/faq');
		$this->load->model('catalog/faq');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_faq->editFaq($this->request->get['faq_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'], true));
		}

		$this->getForm();
	}

	public function delete()
	{
		$this->load->language('catalog/faq');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/faq');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $faq_id) {
				$this->model_catalog_faq->deleteFaq($faq_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	protected function getList()
	{

		$this->load->language('catalog/faq');
		$this->load->model('catalog/faq_category');
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array) $this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		if (isset($this->session->data['success'])) {
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

		$data['add'] = $this->url->link('catalog/faq/add', 'user_token=' . $this->session->data['user_token'], true);
		$data['delete'] = $this->url->link('catalog/faq/delete', 'user_token=' . $this->session->data['user_token'], true);
		$data['faq_categories'] = $this->model_catalog_faq_category->getFaqCategories();
		$data['faqs'] = array();


		$page = isset($this->request->get['page']) ? (int) $this->request->get['page'] : 1;
		$filter_data = array(
			'sort' => 'title',
			'order' => 'ASC',
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$faq_total = $this->model_catalog_faq->getTotalFaqs();

		$results = $this->model_catalog_faq->getFaqs($filter_data);


		foreach ($results as $result) {

			$data['faqs'][] = array(
				'faq_id' => $result['faq_id'],
				'title' => $result['title'],
				'text' => $result['text'],
				'faq_category_id' => $result['faq_category_id'],
				'edit' => $this->url->link('catalog/faq/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $result['faq_id'], true)
			);
		}

		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $faq_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($faq_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($faq_total - $this->config->get('config_limit_admin'))) ? $faq_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $faq_total, ceil($faq_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/faq_list', $data));
	}

	protected function getForm()
	{

		$this->load->model('catalog/faq_category');
		$this->load->model('catalog/faq'); // Load the FAQ model

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		$data['user_token'] = $this->session->data['user_token'];
		$this->load->language('catalog/faq');
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['faq_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_text'] = $this->language->get('entry_text');

		$data['entry_parent'] = $this->language->get('entry_parent');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['action'] = !isset($this->request->get['faq_id']) ? $this->url->link('catalog/faq/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('catalog/faq/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $this->request->get['faq_id'], true);
		$data['cancel'] = $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->get['faq_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$faq_info = $this->model_catalog_faq->getFaq($this->request->get['faq_id']);
		}

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($faq_info)) {
			$data['title'] = $faq_info['title'];
		} else {
			$data['title'] = '';
		}

		if (isset($this->request->post['text'])) {
			$data['text'] = $this->request->post['text'];
		} elseif (!empty($faq_info)) {
			$data['text'] = $faq_info['text'];
		} else {
			$data['text'] = '';
		}

		if (isset($this->request->post['faq_category_id'])) {
			$data['faq_category_id'] = $this->request->post['faq_category_id'];
		} elseif (!empty($faq_info)) {
			$data['faq_category_id'] = $faq_info['faq_category_id'];
		} else {
			$data['faq_category_id'] = '';
		}
		
		$category_info = $this->model_catalog_faq_category->getFaqCategory( $faq_info['faq_category_id']);

		if (isset($this->request->post['parent_title'])) {
			$data['parent_title'] = $this->request->post['parent_title'];
		} elseif (!empty($category_info)) {
			$data['parent_title'] = $category_info['title'];
		} else {
			$data['parent_title'] = '';
		}

		$this->load->model('catalog/faq_category');
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/faq_form', $data));
	}


	protected function validateForm()
	{
		if (!$this->user->hasPermission('modify', 'catalog/faq')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['title']) < 1) || (utf8_strlen($this->request->post['title']) > 64)) {
			$this->error['title'] = $this->language->get('error_title');
		}

		return !$this->error;
	}

	protected function validateDelete()
	{
		if (!$this->user->hasPermission('modify', 'catalog/faq_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('catalog/product');
		$this->load->model('catalog/faq_category');
		foreach ($this->request->post['selected'] as $faq_category_id) {
			$product_total = $this->model_catalog_faq_category->getTotalFaqss($faq_category_id);

			if ($product_total) {
				$this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
			}
		}

		return !$this->error;
	}
}
