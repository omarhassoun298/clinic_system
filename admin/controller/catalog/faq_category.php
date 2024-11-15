<?php
class ControllerCatalogFaqCategory extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('catalog/faq_category');
        $this->load->model('catalog/faq_category');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->getList();
    }

	public function add() {
		$this->load->language('catalog/faq_category');
	
		$this->document->setTitle($this->language->get('heading_title'));
	
		$this->load->model('catalog/faq_category');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_catalog_faq_category->addFaqCategory($this->request->post);
	
			$this->session->data['success'] = $this->language->get('text_success');
	
			$url = '';
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int)$this->request->get['page'];
			}
	
			$this->response->redirect($this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
	
		$this->getForm();
	}
	

    public function edit() {
        $this->load->language('catalog/faq_category');
        $this->load->model('catalog/faq_category');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_faq_category->editFaqCategory($this->request->get['faq_category_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
		$this->load->language('catalog/faq_category');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/faq_category');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $faq_category_id) {
				$this->model_catalog_faq_category->deleteFaqCategory($faq_category_id);
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

			$this->response->redirect($this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	

	protected function getList() {
		$this->load->model('tool/image');
		$this->load->language('catalog/faq_category');
		$this->load->model('catalog/faq_category');
	
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		$data['add'] = $this->url->link('catalog/faq_category/add', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['delete'] = $this->url->link('catalog/faq_category/delete', 'user_token=' . $this->session->data['user_token'], true);

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
		$data['faq_categorys'] = array();
	
		$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
		$filter_data = array(
			'sort'  => 'title',
			'order' => 'ASC',
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);
	
		$faq_category_total = $this->model_catalog_faq_category->getTotalFaqCategories();
	
		$results = $this->model_catalog_faq_category->getFaqCategories($filter_data);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 40, 40);
			}
			$parent_title = '';
			if ($result['parent_id'] != 0) {
				foreach ($results as $parent_category) {
					if ($parent_category['faq_category_id'] == $result['parent_id']) {
						$parent_title = $parent_category['title']; // Set parent title if found
						break;
					}
				}
			}
		
			$data['faq_categorys'][] = array(
				'faq_category_id' => $result['faq_category_id'],
				'title'           => $result['title'],
				'subtitle'        => $result['subtitle'],
				'image'           => $image,
				'parent_title'    => $parent_title, // Use parent title instead of parent_id
				'edit'            => $this->url->link('catalog/faq_category/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_category_id=' . $result['faq_category_id'], true)
			);
		
		}
	
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $faq_category_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($faq_category_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($faq_category_total - $this->config->get('config_limit_admin'))) ? $faq_category_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $faq_category_total, ceil($faq_category_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
	
		$this->response->setOutput($this->load->view('catalog/faq_category_list', $data));
	}
	
	protected function getForm() {
		$data['user_token'] = $this->session->data['user_token'];
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$this->load->model('catalog/faq_category');
		$data['faq_categories'] = $this->model_catalog_faq_category->getFaqCategories();
	
		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['sub_title'])) {
			$data['error_sub_title'] = $this->error['sub_title'];
		} else {
			$data['error_sub_title'] = array();
		}


		if (isset($this->request->get['faq_category_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$category_info = $this->model_catalog_faq_category->getFaqCategory($this->request->get['faq_category_id']);
		} else {
			$category_info = array();
		}
	
		if (isset($category_info['parent_id']) && $category_info['parent_id'] != 0) {
			$parent_category = $this->model_catalog_faq_category->getFaqCategory($category_info['parent_id']);
			$data['parent_title'] = $parent_category['title']; // Get the parent title
		} else {
			$data['parent_title'] = ''; // Default if no parent
		}
	
		$data['parent_id'] = isset($category_info['parent_id']) ? $category_info['parent_id'] : 0;
	
	
	
		// Set image data
		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($category_info)) {
			$data['image'] = $category_info['image'];
		} else {
			$data['image'] = '';
		}
	
		$this->load->model('tool/image');
	
		// Resize image or use placeholder
		if (!empty($data['image']) && is_file(DIR_IMAGE . $data['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
	
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
	
		// Load language
		$this->load->language('catalog/faq_category');
		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_form'] = !isset($this->request->get['faq_category_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_subtitle'] = $this->language->get('entry_subtitle');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_parent'] = $this->language->get('entry_parent');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
	
		// Set action and cancel links
		$data['action'] = !isset($this->request->get['faq_category_id']) ? $this->url->link('catalog/faq_category/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('catalog/faq_category/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_category_id=' . $this->request->get['faq_category_id'], true);
		$data['cancel'] = $this->url->link('catalog/faq_category', 'user_token=' . $this->session->data['user_token'], true);
	
		// Set form fields
		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($category_info)) {
			$data['title'] = $category_info['title'];
		} else {
			$data['title'] = '';
		}
	
		if (isset($this->request->post['subtitle'])) {
			$data['subtitle'] = $this->request->post['subtitle'];
		} elseif (!empty($category_info)) {
			$data['subtitle'] = $category_info['subtitle'];
		} else {
			$data['subtitle'] = '';
		}
	
		if (isset($this->request->post['parent_id'])) {
			$data['parent_id'] = $this->request->post['parent_id'];
		} elseif (!empty($category_info)) {
			$data['parent_id'] = $category_info['parent_id'];
		} else {
			$data['parent_id'] = '';
		}
	
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
	
		$this->response->setOutput($this->load->view('catalog/faq_category_form', $data));
	}
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_title']) || isset($this->request->get['filter_model'])) {
			$this->load->model('catalog/faq_category');

			if (isset($this->request->get['filter_title'])) {
				$filter_title = $this->request->get['filter_title'];
			} else {
				$filter_title = '';
			}

			if (isset($this->request->get['limit'])) {
				$limit = (int)$this->request->get['limit'];
			} else {
				$limit = 5;
			}

			$filter_data = array(
				'filter_title'  => $filter_title,
				'start'        => 0,
				'limit'        => $limit
			);

			$results = $this->model_catalog_faq_category->getFaqCategories($filter_data);

			foreach ($results as $result) {

				$json[] = array(
					'faq_category_id' => $result['faq_category_id'],
					'title'       =>($result['title'])
				);
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/faq_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['title']) < 1) || (utf8_strlen($this->request->post['title']) > 64)) {
			$this->error['title'] = $this->language->get('error_title');
		}

		if ((utf8_strlen($this->request->post['sub_title']) < 1) || (utf8_strlen($this->request->post['sub_title']) > 64)) {
			$this->error['sub_title'] = $this->language->get('error_sub_title');
		}
		return !$this->error;
	}
	

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/faq_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('catalog/product');

		foreach ($this->request->post['selected'] as $faq_category_id) {
			$product_total = $this->model_catalog_faq_category->getTotalFaqss($faq_category_id);

			if ($product_total) {
				$this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
			}
		}

		return !$this->error;
    }
}
