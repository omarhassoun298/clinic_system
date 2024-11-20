<?php
class ControllerClinicPatient extends Controller {
    private $error = array();

    public function index() {
        $this->load->model('clinic/patient');

        $this->document->setTitle('Patients');

        $this->getList();
    }

	public function add() {
		$this->load->language('clinic/patient');
	
		$this->document->setTitle('Patients');
	
		$this->load->model('clinic/patient');
	
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateForm()) {
			$this->model_clinic_patient->addPatient($this->request->post);
	
			$this->session->data['success'] = 'Success: You have modified Patients!';
	
			$url = '';
	
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . (int)$this->request->get['page'];
			}
	
			$this->response->redirect($this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
	
		$this->getForm();
	}
	

    public function edit() {
        $this->load->model('clinic/patient');
        
		$this->document->setTitle('Patients');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_clinic_patient->editPatient($this->request->get['patient_id'], $this->request->post);

			$this->session->data['success'] = 'Success: You have modified Patients!';
            $this->response->redirect($this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->getForm();
    }

    public function delete() {
		$this->load->language('clinic/patient');

		$this->document->setTitle('Patients');

		$this->load->model('clinic/patient');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $patient_id) {
				$this->model_clinic_patient->deletePatient($patient_id);
			}

			$this->session->data['success'] = 'Success: You have modified Patients!';

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

			$this->response->redirect($this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	

	protected function getList() {
		$this->load->model('tool/image');
		$this->load->language('clinic/patient');
	
		$data['breadcrumbs'] = array();
	
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
	
		$data['breadcrumbs'][] = array(
			'text' => 'Patients',
			'href' => $this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'], true)
		);
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}
		$data['add'] = $this->url->link('clinic/patient/add', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['delete'] = $this->url->link('clinic/patient/delete', 'user_token=' . $this->session->data['user_token'], true);

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
	
		$blog_total = $this->model_clinic_patient->getTotalPatients();
	
		$results = $this->model_clinic_patient->getPatients($filter_data);

		$data['patients'] = array(); 
		foreach ($results as $result) {
			$data['patients'][] = array(
				'patient_id'  => $result['patient_id'],
				'name'    => $result['name'],
				'email'  => $result['email'],
				'telephone'   => $result['telephone'],
                'address'   => $result['address'],
				'diagnosis'   => $result['diagnosis'],
				'created_at'   => $result['created_at'],
				'updated_date'   => $result['updated_date'],
				'description'   => $result['description'],
				'edit'     => $this->url->link('clinic/patient/edit', 'user_token=' . $this->session->data['user_token'] . '&patient_id=' . $result['patient_id'], true)
			);
		}
		
		$data['pagination'] = $this->load->controller('common/pagination', [
			'total' => $blog_total,
			'page'  => $page,
			'limit' => $this->config->get('config_limit_admin'),
			'url'   => $this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'] .'&page={page}')
		]);

		$data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($blog_total - $this->config->get('config_limit_admin'))) ? $blog_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $blog_total, ceil($blog_total / $this->config->get('config_limit_admin')));

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        
		$this->response->setOutput($this->load->view('clinic/patient_list', $data));
	}
	
	protected function getForm()
	{

		$this->load->model('clinic/patient');

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = array();
		}

        if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = array();
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Patients',
			'href' => $this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['user_token'] = $this->session->data['user_token'];
		$this->load->language('clinic/patient');
		$data['heading_title'] = 'patients';

		$data['text_form'] = !isset($this->request->get['patient_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['action'] = !isset($this->request->get['patient_id']) ? $this->url->link('clinic/patient/add', 'user_token=' . $this->session->data['user_token'], true) : $this->url->link('clinic/patient/edit', 'user_token=' . $this->session->data['user_token'] . '&patient_id=' . $this->request->get['patient_id'], true);
		$data['cancel'] = $this->url->link('clinic/patient', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->get['patient_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$patient_info = $this->model_clinic_patient->getPatient($this->request->get['patient_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($patient_info)) {
			$data['name'] = $patient_info['name'];
		} else {
			$data['name'] = '';
		}

        if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} elseif (!empty($patient_info)) {
			$data['description'] = $patient_info['description'];
		} else {
			$data['description'] = '';
		}

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} elseif (!empty($patient_info)) {
			$data['email'] = $patient_info['email'];
		} else {
			$data['email'] = '';
		}
		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($patient_info)) {
			$data['telephone'] = $patient_info['telephone'];
		} else {
			$data['telephone'] = '';
		}
		if (isset($this->request->post['address'])) {
			$data['address'] = $this->request->post['address'];
		} elseif (!empty($patient_info)) {
			$data['address'] = $patient_info['address'];
		} else {
			$data['address'] = '';
		}
        if (isset($this->request->post['diagnosis'])) {
			$data['diagnosis'] = $this->request->post['diagnosis'];
		} elseif (!empty($patient_info)) {
			$data['diagnosis'] = $patient_info['diagnosis'];
		} else {
			$data['diagnosis'] = '';
		}
        if (isset($this->request->post['gender'])) {
			$data['gender'] = $this->request->post['gender'];
		} elseif (!empty($patient_info)) {
			$data['gender'] = $patient_info['gender'];
		} else {
			$data['gender'] = '';
		}
        if (isset($this->request->post['doctor'])) {
			$data['doctor'] = $this->request->post['doctor'];
		} elseif (!empty($patient_info)) {
			$data['doctor'] = $patient_info['doctor'];
		} else {
			$data['doctor'] = '';
		}

        $data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('clinic/patient_form', $data));
	}
	
	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_title']) || isset($this->request->get['filter_model'])) {
			$this->load->model('clinic/patient');

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

			$results = $this->model_clinic_patient->getblogPatients($filter_data);

			foreach ($results as $result) {

				$json[] = array(
					'patient_id' => $result['patient_id'],
					'title'       =>($result['title'])
				);
			}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'clinic/patient')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((oc_strlen(trim($this->request->post['name'])) < 1) || (oc_strlen($this->request->post['name']) > 255)) {
			$this->error['name'] = 'Name must be between 1 and 255 characters!';
        }

        if ((oc_strlen(trim($this->request->post['telephone'])) < 1) || (oc_strlen($this->request->post['telephone']) > 255)) {
			$this->error['telephone'] = 'Telephone must be between 3 and 32 characters!';
        }
		
		return !$this->error;
	}
	

    protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'clinic/patient')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
    }
}
