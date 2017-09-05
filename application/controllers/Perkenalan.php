<?php 

class Perkenalan extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session', 'auth'));
		$this->load->database();
		$this->load->model(array('Perkenalan_model', 'User_model'));
	}

	public function request_keluarga($id) {

		$cek = $this->auth->cek_login_peserta();

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
		//echo date("Y M D H:i:s", time());
		//die();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('ciri_khas', 'Ciri Khas', 'required');
		$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');

		if ($this->form_validation->run() == FALSE) {

			/*$error_message = "Every+Fields+are+Required";

			redirect('../request/'.$id.'?err='.$error_message);*/

			$this->request($id);
			
		}else {
			$data = array(
				'id_keluarga' => $id,
				'nama' => $this->input->post('nama'),
				'ciri_khas' => $this->input->post('ciri_khas'),
				'link_foto' => $this->input->post('link_foto'),
				'request_time' => $date
			);

			//fungsi untuk mengubah datetime menjadi timestamp
			/*echo strtotime($data['request_time']);
			die();*/
			
			$result = $this->Perkenalan_model->request_keluarga($data);

			if (!$result) {
				$this->session->set_flashdata('error_message', 'Error!');
				redirect(base_url());
			}else {
				$this->session->set_flashdata('message_display', 'Request sent!');
				redirect(base_url('perkenalan'));
			}
		}
	}

	public function request_peserta($id) {

		$cek = $this->auth->cek_login_peserta();

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
		//$date = time();
		//echo date("M D Y H:i:s", $date);
		//die();
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat_kos', 'Alamat Kos', 'required');
		$this->form_validation->set_rules('id_line', 'Id Line', 'required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required');
		$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');

		if ($this->form_validation->run() == FALSE) {
			/*$error_message = "Every+Fields+are+Required";
			redirect('../request/'.$id.'?err='.$error_message);*/

			$this->request($id);
		}else {
			$data = array(
				'id_user2' => $id,
				'nama' => $this->input->post('nama'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => date("Y-m-d", strtotime($this->input->post('tgl_lahir'))),
				'alamat_kos' => $this->input->post('alamat_kos'),
				'id_line' => $this->input->post('id_line'),
				'no_hp' => $this->input->post('no_hp'),
				'link_foto' => $this->input->post('link_foto'),
				'request_time' => $date
			);
			
			$result = $this->Perkenalan_model->request_angkatan($data);

			if (!$result) {
				$data['error_message'] = "Request error";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$data['message_display'] = "Request sent!";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}
		}
		
	}

	public function my_request() {

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

		$id_user = $this->session->userdata['logged_in']['id_user'];

		$pending = $this->Perkenalan_model->getPendingRequest($id_user);
		$accepted = $this->Perkenalan_model->getAcceptedRequest($id_user);

		if ($pending == FALSE) {
			$pending = NULL;
		}

		if ($accepted == FALSE) {
			$accepted = NULL;
		}

		$data['pending'] = $pending;
		$data['accepted'] = $accepted;

		$this->load->view('header');
		$this->load->view('my_request', $data);
		$this->load->view('footer');
		
	
	}

	public function request($id_user) {

		$cek = $this->auth->cek_login_peserta();

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

		$id_user_maba = $this->session->userdata['logged_in']['id_user'];
		$angkatan = $this->User_model->get_role($id_user);
		$max_angkatan = $this->User_model->max_angkatan();

		$data['id_user'] = $id_user;

		if ($angkatan == $max_angkatan) {
			$cek = $this->Perkenalan_model->check_perkenalan($id_user_maba, $id_user, 'perkenalan_angkatan');
			if ($cek == TRUE) {
				$this->session->set_flashdata('error_message', 'Failed: Request already sent before!');
				redirect(base_url());	
			}else {

				//get pp from database
				$pp = $this->Perkenalan_model->get_pp();

				$data['pp'] = $pp;

				$this->load->view('header');
				$this->load->view('request_angkatan', $data);
				$this->load->view('footer');
			}
		}else {
			$cek = $this->Perkenalan_model->check_perkenalan($id_user_maba, $id_user, 'perkenalan_kating');
			if ($cek == TRUE) {
				$this->session->set_flashdata('error_message', 'Failed: Request already approved!');
				redirect(base_url(''));
			}else {
				$this->load->view('header');
				$this->load->view('request_perkenalan', $data);
				$this->load->view('footer');
			}
		}
	}

}
 ?>