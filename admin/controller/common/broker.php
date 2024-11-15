<?php
class ControllerCommonBroker extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('common/broker');
        $this->load->model('common/broker');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->getList();
    }

	public function add() {
		$this->load->language('common/broker');
	
		$this->document->setTitle($this->language->get('heading_title'));
	
		$this->load->model('common/broker');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_common_broker->addbroker($this->request->post);
	
			$this->session->data['success'] = $this->language->get('text_success');
	
			$url = '';
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int)$this->request->get['page'];
			}
	
			$this->response->redirect($this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
	
		$this->getForm();
	}
	

    public function edit() {
        $this->load->language('common/broker');
        $this->load->model('common/broker');
        
		$this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_common_broker->editbroker($this->request->get['broker_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
		$this->load->language('common/broker');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('common/broker');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $broker_id) {
				$this->model_common_broker->deletebroker($broker_id);
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

			$this->response->redirect($this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	

	protected function getList() {
		$this->load->model('tool/image');
		$this->load->language('common/broker');
	
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		$data['add'] = $this->url->link('common/broker/add', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['delete'] = $this->url->link('common/broker/delete', 'user_token=' . $this->session->data['user_token'], true);

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

		$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
		$filter_data = array(
			'sort'  => 'title',
			'order' => 'ASC',
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);
	
		$broker_total = $this->model_common_broker->getTotalBrokers();
	
		$results = $this->model_common_broker->getBrokers($filter_data);

		$data['brokers'] = array(); 

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 40, 40);
			}
			$data['brokers'][] = array(
				'broker_id'  => $result['broker_id'],
				'title'    => $result['title'],
                'url'    => $result['url'],
				'description'  => $result['description'],
				'image'    => $image,
				'status'   => $result['status'],
				'edit'     => $this->url->link('common/broker/edit', 'user_token=' . $this->session->data['user_token'] . '&broker_id=' . $result['broker_id'], true)
			);
		}
		
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $broker_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($broker_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($broker_total - $this->config->get('config_limit_admin'))) ? $broker_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $broker_total, ceil($broker_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
	
		$this->response->setOutput($this->load->view('common/broker_list', $data));
	}
	
	protected function getForm()
	{

		$this->load->model('common/broker');

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

        if (isset($this->error['url'])) {
			$data['error_url'] = $this->error['url'];
		} else {
			$data['error_url'] = array();
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->language('common/broker');
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['broker_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['action'] = !isset($this->request->get['broker_id']) ? $this->url->link('common/broker/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('common/broker/edit', 'user_token=' . $this->session->data['user_token'] . '&broker_id=' . $this->request->get['broker_id'], true);
		$data['cancel'] = $this->url->link('common/broker', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->get['broker_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$broker_info = $this->model_common_broker->getBroker($this->request->get['broker_id']);
		}

		$data['types'] = ['local', 'international'];

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($broker_info)) {
			$data['title'] = $broker_info['title'];
		} else {
			$data['title'] = '';
		}

        if (isset($this->request->post['url'])) {
			$data['url'] = $this->request->post['url'];
		} elseif (!empty($broker_info)) {
			$data['url'] = $broker_info['url'];
		} else {
			$data['url'] = '';
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($broker_info)) {
			$data['image'] = $broker_info['image'];
		} else {
			$data['image'] = '';
		}

		if (isset($this->request->post['type'])) {
			$data['type'] = $this->request->post['type'];
		} elseif (!empty($broker_info)) {
			$data['type'] = $broker_info['type'];
		} else {
			$data['type'] = '';
		}

		if (isset($this->request->post['location'])) {
			$data['location'] = $this->request->post['location'];
		} elseif (!empty($broker_info)) {
			$data['location'] = $broker_info['location'];
		} else {
			$data['location'] = '';
		}
	
		$this->load->model('tool/image');
	
		if (!empty($data['image']) && is_file(DIR_IMAGE . $data['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
	
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];

		} elseif (!empty($broker_info)) {
			$data['description'] = $broker_info['description'];
		} else {
			$data['description'] = '';
		}
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($broker_info)) {
			$data['status'] = $broker_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/broker_form', $data));
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'common/broker')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen(trim($this->request->post['title'])) < 1) || (oc_strlen($this->request->post['title']) > 255)) {
			$this->error['title'] = $this->language->get('error_title');
		}


		if ((oc_strlen(trim($this->request->post['url'])) < 1) || (oc_strlen($this->request->post['url']) > 255)) {
			$this->error['url'] = $this->language->get('error_url');
		}

		return !$this->error;
	}
	

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'common/broker')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
    }
}
