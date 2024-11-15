<?php
class ControllerBlogKeyword extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('blog/keyword');
        $this->load->model('blog/keyword');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->getList();
    }

	public function add() {
		$this->load->language('blog/keyword');
	
		$this->document->setTitle($this->language->get('heading_title'));
	
		$this->load->model('blog/keyword');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_blog_keyword->addKeyword($this->request->post);
	
			$this->session->data['success'] = $this->language->get('text_success');
	
			$url = '';
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int)$this->request->get['page'];
			}
	
			$this->response->redirect($this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
	
		$this->getForm();
	}
	

    public function edit() {
        $this->load->language('blog/keyword');
        $this->load->model('blog/keyword');
        
		$this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_blog_keyword->editKeyword($this->request->get['keyword_id'], $this->request->post);
			
			$this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
		$this->load->language('blog/keyword');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('blog/keyword');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $keyword_id) {
				$this->model_blog_keyword->deleteKeyword($keyword_id);
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

			$this->response->redirect($this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	

	protected function getList() {
		$this->load->model('tool/image');
		$this->load->language('blog/keyword');
		$this->load->model('blog/keyword');
	
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		$data['add'] = $this->url->link('blog/keyword/add', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['delete'] = $this->url->link('blog/keyword/delete', 'user_token=' . $this->session->data['user_token'], true);

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
		$data['keywords'] = array();
	
		$page = isset($this->request->get['page']) ? (int)$this->request->get['page'] : 1;
		$filter_data = array(
			'sort'  => 'name',
			'order' => 'ASC',
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);
	
		$keyword_total = $this->model_blog_keyword->getTotalKeywords();
	
		$results = $this->model_blog_keyword->getKeywords($filter_data);
		foreach ($results as $result) {
			$data['keywords'][] = array(
				'keyword_id'  => $result['keyword_id'],
				'name'    => $result['name'],
				'edit'     => $this->url->link('blog/keyword/edit', 'user_token=' . $this->session->data['user_token'] . '&keyword_id=' . $result['keyword_id'], true)
			);
		
		}
	
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $keyword_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($keyword_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($keyword_total - $this->config->get('config_limit_admin'))) ? $keyword_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $keyword_total, ceil($keyword_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
	
		$this->response->setOutput($this->load->view('blog/keyword_list', $data));
	}
	
	protected function getForm()
	{

		$this->load->model('blog/keyword');

		$data['breadcrumbs'] = array();

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = array();
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->language('blog/keyword');
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['keyword_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['action'] = !isset($this->request->get['keyword_id']) ? $this->url->link('blog/keyword/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('blog/keyword/edit', 'user_token=' . $this->session->data['user_token'] . '&keyword_id=' . $this->request->get['keyword_id'], true);
		$data['cancel'] = $this->url->link('blog/keyword', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->get['keyword_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$keyword_info = $this->model_blog_keyword->getKeyword($this->request->get['keyword_id']);
		}
		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($keyword_info)) {
			$data['name'] = $keyword_info['name'];
		} else {
			$data['name'] = '';
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('blog/keyword_form', $data));
	}
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_model'])) {
			$this->load->model('blog/keyword');

			if (isset($this->request->get['filter_name'])) {
				$filter_name = $this->request->get['filter_name'];
			} else {
				$filter_name = '';
			}

			if (isset($this->request->get['limit'])) {
				$limit = (int)$this->request->get['limit'];
			} else {
				$limit = 5;
			}

			$filter_data = array(
				'filter_name'  => $filter_name,
				'start'        => 0,
				'limit'        => $limit
			);

			$results = $this->model_blog_keyword->getKeywords($filter_data);

			foreach ($results as $result) {

				$json[] = array(
					'keyword_id' => $result['keyword_id'],
					'name'       =>($result['name'])
				);
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'blog/keyword')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen(trim($this->request->post['name'])) < 1) || (oc_strlen($this->request->post['name']) > 255)) {
			$this->error['name'] = $this->language->get('error_name');
		}
		return !$this->error;
	}
	

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'blog/keyword')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
    }
}
