<?php
class ControllerBlogBlog extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('blog/blog');
        $this->load->model('blog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->getList();
    }

	public function add() {
		$this->load->language('blog/blog');
	
		$this->document->setTitle($this->language->get('heading_title'));
	
		$this->load->model('blog/blog');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_blog_blog->addBlog($this->request->post);
	
			$this->session->data['success'] = $this->language->get('text_success');
	
			$url = '';
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int)$this->request->get['page'];
			}
	
			$this->response->redirect($this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
	
		$this->getForm();
	}
	

    public function edit() {
        $this->load->language('blog/blog');
        $this->load->model('blog/blog');
        
		$this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_blog_blog->editBlog($this->request->get['blog_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
		$this->load->language('blog/blog');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('blog/blog');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $blog_id) {
				$this->model_blog_blog->deleteBlog($blog_id);
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

			$this->response->redirect($this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	

	protected function getList() {
		$this->load->model('tool/image');
		$this->load->language('blog/blog');
	
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		$data['add'] = $this->url->link('blog/blog/add', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['delete'] = $this->url->link('blog/blog/delete', 'user_token=' . $this->session->data['user_token'], true);

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
	
		$blog_total = $this->model_blog_blog->getTotalBlogs();
	
		$results = $this->model_blog_blog->getBlogs($filter_data);

		$data['blogs'] = array(); 

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_tool_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_tool_image->resize('no_image.png', 40, 40);
			}
		
			$keywords = $this->model_blog_blog->getBlogToKeywords($result['blog_id']);
			$blog_keywords = array(); 
		
			foreach($keywords as $keyword) {
				$blog_keywords[] = array(
					'name' => $keyword['name']
				);
			}
		
			$data['blogs'][] = array(
				'blog_id'  => $result['blog_id'],
				'title'    => $result['title'],
				'content'  => $result['content'],
				'image'    => $image,
				'status'   => $result['status'],
				'keywords' => $blog_keywords, 
				'edit'     => $this->url->link('blog/blog/edit', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $result['blog_id'], true)
			);
		}
		
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $blog_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($blog_total - $this->config->get('config_limit_admin'))) ? $blog_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $blog_total, ceil($blog_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
	
		$this->response->setOutput($this->load->view('blog/blog_list', $data));
	}
	
	protected function getForm()
	{

		$this->load->model('blog/blog');

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['keyword'])) {
			$data['error_keyword'] = $this->error['keyword'];
		} else {
			$data['error_keyword'] = array();
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->language('blog/blog');
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['blog_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['action'] = !isset($this->request->get['blog_id']) ? $this->url->link('blog/blog/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('blog/blog/edit', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $this->request->get['blog_id'], true);
		$data['cancel'] = $this->url->link('blog/blog', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->get['blog_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$blog_info = $this->model_blog_blog->getBlog($this->request->get['blog_id']);
		}

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($blog_info)) {
			$data['title'] = $blog_info['title'];
		} else {
			$data['title'] = '';
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($blog_info)) {
			$data['image'] = $blog_info['image'];
		} else {
			$data['image'] = '';
		}
	
		$this->load->model('tool/image');
	
		if (!empty($data['image']) && is_file(DIR_IMAGE . $data['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($data['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
	
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['content'])) {
			$data['content'] = $this->request->post['content'];

		} elseif (!empty($blog_info)) {
			$data['content'] = $blog_info['content'];
		} else {
			$data['content'] = '';
		}
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($blog_info)) {
			$data['status'] = $blog_info['status'];
		} else {
			$data['status'] = '';
		}
		
		$keywords = $this->model_blog_blog->getBlogToKeywords($blog_info['blog_id']);

		$data['blog_keywords_ckecked'] = array();

		if(isset($this->request->post['blog_keyword'])){
			$keywords = $this->request->post['blog_keyword'];
			foreach($keywords as $keyword){
				$data['blog_keywords_checked'][$keyword] = true;
			}
		}elseif(!empty($keywords)){
			foreach($keywords as $keyword){
				$data['blog_keywords_checked'][$keyword['keyword_id']] = true;
			}
		}


		$this->load->model('blog/keyword');

		$results = $this->model_blog_keyword->getKeywords();

		$data['blog_keywords'] = array();

		foreach ($results as $result) {

			$data['blog_keywords'][] = array(
				'keyword_id' => $result['keyword_id'],
				'name'       =>$result['name']
			);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('blog/blog_form', $data));
	}
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_title']) || isset($this->request->get['filter_model'])) {
			$this->load->model('blog/blog');

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

			$results = $this->model_blog_blog->getblogCategories($filter_data);

			foreach ($results as $result) {

				$json[] = array(
					'blog_id' => $result['blog_id'],
					'title'       =>($result['title'])
				);
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'blog/blog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen(trim($this->request->post['title'])) < 1) || (oc_strlen($this->request->post['title']) > 255)) {
			$this->error['title'] = $this->language->get('error_title');
		}

		if (empty($this->request->post['blog_keyword'])) {
			$this->error['keyword'] = $this->language->get('error_keyword');
		}
		return !$this->error;
	}
	

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'blog/blog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
    }
}
