<?php 

/**
* 
*/
class A extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session', 'auth'));
		$this->load->database();
		$this->load->model(array('Admin_model', 'User_model'));
	}

	public function perkenalanKeluarga() {

		$cek = $this->auth->cek_login_admin();

		if ($cek['result'] != TRUE) {
			switch ($cek['code']) {
				case 'login':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->login($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'login');
					break;
				case 'new_login':
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'new_login');
					break;
				case 'home':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->index($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url());
					break;
			}
		}

		$result = $this->Admin_model->getPerkenalanKeluarga();

		if ($result == FALSE) {
			/*$data['message_display'] = "Perkenalan kosong?";
			//goto list perkenalan
			$data['result'] = $result;
			$this->load->view('header');
			$this->load->view('admin',$data);
			$this->load->view('footer');*/
			$this->session->set_flashdata('error_message', 'No pending task submissions!');
			redirect(base_url());
		}else {
			//goto list perkenalan
			$data['result'] = $result;
			$this->load->view('header');
			$this->load->view('admin',$data);
			$this->load->view('footer');
		}	
	}

	public function perkenalanAngkatan($id = NULL) {

		$cek = $this->auth->cek_login();

		if ($cek['result'] == FALSE) {
			if ($cek['code'] == 'login') {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'login');
			}else {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'new_login');
			}
		}

		if ($this->session->userdata['logged_in']['role'] != 'admin') {
			$result = $this->Admin_model->getPerkenalanAngkatan($this->session->userdata['logged_in']['id_user']);
		}else {

			if ($id == NULL) {
				$data['error_message'] = "Parameter is required.";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}

			$result = $this->Admin_model->getPerkenalanAngkatan($id);

		}
		if ($result == FALSE) {
			$this->session->set_flashdata('error_message', 'Friends list is empty!');
			redirect(base_url());
		}else {
			$data['result'] = $result;
			$this->load->view('header');
			$this->load->view('perkenalan_angkatan', $data);
			$this->load->view('footer');
			// die();
			//goto list perkenalan
		}
		
	}

	public function jumlahPerkenalan() {

		$cek = $this->auth->cek_login_admin();

		if ($cek['result'] != TRUE) {
			switch ($cek['code']) {
				case 'login':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->login($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'login');
					break;
				case 'new_login':
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'new_login');
					break;
				case 'home':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->index($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url());
					break;
			}
		}
	
		$result = $this->Admin_model->getJumlahPerkenalan();

		if ($result == FALSE) {
			$data['message_display'] = "No task submission!";
			// echo $data['message_display'];
			// die();
			//goto jumlah perkenalan
			$this->load->view('header');
			$this->load->view('admin_request', $data);
			$this->load->view('footer');
		}else {
			//goto jumlah perkenalan
			$data['result'] = $result;
			$this->load->view('header');
			$this->load->view('admin_request', $data);
			$this->load->view('footer');
		}
	}

	public function approvePerkenalan($id_perkenalan) {

		$cek = $this->auth->cek_login_admin();

		if ($cek['result'] != TRUE) {
			switch ($cek['code']) {
				case 'login':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->login($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'login');
					break;
				case 'new_login':
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'new_login');
					break;
				case 'home':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->index($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url());
					break;
			}
		}

		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d H:i:s", time());

		$data = array(
			'status' => 1,
			'approve_time' => $date
		);

		$result = $this->Admin_model->approveRejectPerkenalan($id_perkenalan, $data);

		if ($result == FALSE) {
			//goto jumlah perkenalan
			$data['error_message'] = "ID perkenalan not found!";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			//goto jumlah perkenalan
			redirect('../perkenalan_keluarga');
		}
	}

	public function rejectPerkenalan($id_perkenalan) {

		$cek = $this->auth->cek_login_admin();

		if ($cek['result'] != TRUE) {
			switch ($cek['code']) {
				case 'login':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->login($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'login');
					break;
				case 'new_login':
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'new_login');
					break;
				case 'home':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->index($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url());
					break;
			}
		}

		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d H:i:s", time());

		$data = array(
			'status' => 2,
			'approve_time' => $date
		);

		$result = $this->Admin_model->approveRejectPerkenalan($id_perkenalan, $data);

		if ($result == FALSE) {
			$data['error_message'] = "ID perkenalan not found!";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
			//goto jumlah perkenalan
		}else {
			//goto jumlah perkenalan
			redirect(base_url('perkenalan_keluarga'));
		}
	}

	public function detailPerkenalan($id_perkenalan = NULL) {

		$cek = $this->auth->cek_login_admin();

		if ($cek['result'] != TRUE) {
			switch ($cek['code']) {
				case 'login':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->login($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'login');
					break;
				case 'new_login':
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url().'new_login');
					break;
				case 'home':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->index($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url());
					break;
			}
		}
		
		if ($id_perkenalan == NULL) {
			$data['error_message'] = "id_perkenalan is required.";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			$result = $this->Admin_model->getDetailPerkenalan($id_perkenalan);

			if ($result == FALSE) {
				$data['error_message'] = "id_perkenalan not found!";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$data['result'] = $result;
				$this->load->view('header');
				$this->load->view('accept_perkenalan', $data);
				$this->load->view('footer');
			}
		}
	}

}

 ?>