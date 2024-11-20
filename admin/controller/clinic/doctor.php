<?php
class ControllerClinicDoctor extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('clinic/doctor');
        $this->load->model('clinic/doctor');

        $this->document->setTitle('Doctors');

        $this->getList();
    }

	public function add() {
		$this->load->language('clinic/doctor');
	
		$this->document->setTitle('Doctors');
	
		$this->load->model('clinic/doctor');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_clinic_doctor->addDoctor($this->request->post);
	
			$this->session->data['success'] = 'Success: You have modified Doctors!';
	
			$url = '';
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int)$this->request->get['page'];
			}
	
			$this->response->redirect($this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
	
		$this->getForm();
	}
	

    public function edit() {
        $this->load->language('clinic/doctor');
        $this->load->model('clinic/doctor');
        
		$this->document->setTitle('Doctors');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_clinic_doctor->editDoctor($this->request->get['doctor_id'], $this->request->post);

			$this->session->data['success'] = 'Success: You have modified Doctors!';
            $this->response->redirect($this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
		$this->load->language('clinic/doctor');

		$this->document->setTitle('Doctors');

		$this->load->model('clinic/doctor');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $doctor_id) {
				$this->model_clinic_doctor->deleteDoctor($doctor_id);
			}

			$this->session->data['success'] = 'Success: You have modified Doctors!';

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

			$this->response->redirect($this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	

	protected function getList() {
		$this->load->model('tool/image');
		$this->load->language('clinic/doctor');
	
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => 'Doctors',
			'href' => $this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		$data['add'] = $this->url->link('clinic/doctor/add', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['delete'] = $this->url->link('clinic/doctor/delete', 'user_token=' . $this->session->data['user_token'], true);

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
	
		$blog_total = $this->model_clinic_doctor->getTotalDoctors();
	
		$results = $this->model_clinic_doctor->getDoctors($filter_data);

		$data['doctors'] = array(); 
		foreach ($results as $result) {
			$data['doctors'][] = array(
				'doctor_id'  => $result['doctor_id'],
				'username'    => $result['username'],
				'specialization'  => $result['specialization'],
				'phone_number'   => $result['phone_number'],
				'edit'     => $this->url->link('clinic/doctor/edit', 'user_token=' . $this->session->data['user_token'] . '&doctor_id=' . $result['doctor_id'], true)
			);
		}
		
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $blog_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($blog_total - $this->config->get('config_limit_admin'))) ? $blog_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $blog_total, ceil($blog_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
	
		$this->response->setOutput($this->load->view('clinic/doctor_list', $data));
	}
	
	protected function getForm()
	{

		$this->load->model('clinic/doctor');

		if (isset($this->error['username'])) {
			$data['error_username'] = $this->error['username'];
		} else {
			$data['error_username'] = array();
		}

        if (isset($this->error['phone_number'])) {
			$data['error_phone_number'] = $this->error['phone_number'];
		} else {
			$data['error_phone_number'] = array();
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Doctors',
			'href' => $this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->language('clinic/doctor');
		$data['heading_title'] = 'Doctors';

		$data['text_form'] = !isset($this->request->get['doctor_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['action'] = !isset($this->request->get['doctor_id']) ? $this->url->link('clinic/doctor/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('clinic/doctor/edit', 'user_token=' . $this->session->data['user_token'] . '&doctor_id=' . $this->request->get['doctor_id'], true);
		$data['cancel'] = $this->url->link('clinic/doctor', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->get['doctor_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$doctor_info = $this->model_clinic_doctor->getDoctor($this->request->get['doctor_id']);
		}

		if (isset($this->request->post['username'])) {
			$data['username'] = $this->request->post['username'];
		} elseif (!empty($doctor_info)) {
			$data['username'] = $doctor_info['username'];
		} else {
			$data['username'] = '';
		}

        if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} elseif (!empty($doctor_info)) {
			$data['description'] = $doctor_info['description'];
		} else {
			$data['description'] = '';
		}

		if (isset($this->request->post['specialization'])) {
			$data['specialization'] = $this->request->post['specialization'];
		} elseif (!empty($doctor_info)) {
			$data['specialization'] = $doctor_info['specialization'];
		} else {
			$data['specialization'] = '';
		}
		if (isset($this->request->post['phone_number'])) {
			$data['phone_number'] = $this->request->post['phone_number'];
		} elseif (!empty($doctor_info)) {
			$data['phone_number'] = $doctor_info['phone_number'];
		} else {
			$data['phone_number'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('clinic/doctor_form', $data));
	}
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_username'])) {
			$this->load->model('clinic/doctor');

			if (isset($this->request->get['filter_username'])) {
				$filter_username = $this->request->get['filter_username'];
			} else {
				$filter_username = '';
			}

			if (isset($this->request->get['limit'])) {
				$limit = (int)$this->request->get['limit'];
			} else {
				$limit = 5;
			}

			$filter_data = array(
				'filter_username'  => $filter_username,
				'start'        => 0,
				'limit'        => $limit
			);

			$results = $this->model_clinic_doctor->getDoctors($filter_data);

			foreach ($results as $result) {

				$json[] = array(
					'doctor_id' => $result['doctor_id'],
					'username'       =>($result['username'])
				);
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'clinic/doctor')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen(trim($this->request->post['username'])) < 1) || (oc_strlen($this->request->post['username']) > 255)) {
			$this->error['username'] = 'Name must be between 1 and 255 characters!';
        }

        if ((oc_strlen(trim($this->request->post['phone_number'])) < 1) || (oc_strlen($this->request->post['phone_number']) > 255)) {
			$this->error['phone_number'] = 'Telephone must be between 3 and 32 characters!';
        }
		
		return !$this->error;
	}
	

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'clinic/doctor')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
    }
}
