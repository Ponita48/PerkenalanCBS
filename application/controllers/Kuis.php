<?php 

/**
* 
*/
class Kuis extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Kuis_model', 'User_model'));
		$this->load->library(array('form_validation', 'session', 'auth'));
		$this->load->database();
		$this->load->helper('url');
	}

	public function view_kuis() {

		$cek = $this->auth->cek_login();

		if ($cek['result'] == FALSE) {
			if ($cek['code'] == 'login') {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'login');
			}else {
				$message = array('type' => 'error_message', 'message' => $cek['message']);
				return $this->new_login($message);
			}
		}

		if ($this->session->userdata['logged_in']['role'] == 'admin') {
			redirect(base_url().'kuis/filled');
		}

		$npm = $this->User_model->get_npm($this->session->userdata['logged_in']['id_user']);

		$filled = $this->Kuis_model->cek_filled_kuis($npm);

		if ($filled == NULL) {
			$data['npm'] = $npm;

			$this->load->view('header');
			$this->load->view('kuis_struktur', $data);
			$this->load->view('footer');
		}else {
			redirect(base_url().'kuis/jawaban');
		}
	}

	public function isi_kuis() {

		$cek = $this->auth->cek_login();

		if ($cek['result'] == FALSE) {
			if ($cek['code'] == 'login') {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'login');
			}else {
				$message = array('type' => 'error_message', 'message' => $cek['message']);
				return $this->new_login($message);
			}
		}

		if ($this->session->userdata['logged_in']['role'] == 'admin') {
			redirect(base_url().'/kuis/filled');
		}

		$npm = $this->User_model->get_npm($this->session->userdata['logged_in']['id_user']);
	
		$data['npm'] = $npm;

		$this->load->view('header');
		$this->load->view('kuis_struktur', $data);
		$this->load->view('footer');
	}

	public function kuis_struktur_submit() {

		$cek = $this->auth->cek_login();

		if ($cek['result'] == FALSE) {
			if ($cek['code'] == 'login') {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'login');
			}else {
				$message = array('type' => 'error_message', 'message' => $cek['message']);
				return $this->new_login($message);
			}
		}

		$npm_maba = $this->session->userdata['logged_in']['npm'];

		$panitia = $this->input->post('panitia');

		$be = $this->input->post('be');

		$dpa = $this->input->post('dpa');

		$presidium = $this->input->post('presidium');

		foreach ($panitia as $jabatan => $info) {
			$this->Kuis_model->insert_panitia($npm_maba, $info['nama'], $jabatan, $info['link_foto']);
		}

		foreach ($be as $jabatan => $info) {
			$this->Kuis_model->insert_bk($npm_maba, $info['nama'], $jabatan, 'be', $info['link_foto']);
		}

		foreach ($dpa as $jabatan => $info) {
			$this->Kuis_model->insert_bk($npm_maba, $info['nama'], $jabatan, 'dpa', $info['link_foto']);
		}

		foreach ($presidium as $jabatan => $info) {
			$this->Kuis_model->insert_bk($npm_maba, $info['nama'], $jabatan, 'presidium', $info['link_foto']);
		}

		redirect(base_url().'kuis/jawaban');

	}

	public function get_kuis($id_user = NULL) {

		$cek = $this->auth->cek_login();

		if ($cek['result'] == FALSE) {
			if ($cek['code'] == 'login') {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'login');
			}else {
				$message = array('type' => 'error_message', 'message' => $cek['message']);
				return $this->new_login($message);
			}
		}

		if ($this->session->userdata['logged_in']['role'] != 'admin') {
			$npm = $this->session->userdata['logged_in']['npm'];
		}else {
			$npm = $this->User_model->get_npm($id_user);
			if ($npm == NULL) {
				$this->session->set_flashdata('error_message', 'User tidak ditemukan');
				redirect(base_url());
			}
		}

		$panitia = $this->Kuis_model->get_kuis_panitia($npm);

		$be = $this->Kuis_model->get_kuis_bk($npm, 'be');

		$dpa = $this->Kuis_model->get_kuis_bk($npm, 'dpa');

		$presidium = $this->Kuis_model->get_kuis_bk($npm, 'presidium');

		$data = array(
			'npm' => $npm,
			'panitia' => $panitia,
			'be' => $be,
			'dpa' => $dpa,
			'presidium' => $presidium
		);

		if ($panitia == NULL || $be == NULL || $dpa == NULL || $presidium == NULL) {
			$this->session->set_flashdata('error_message', 'User belum mengisi kuis');
				redirect(base_url());
		}else {
			$this->load->view('header');
			$this->load->view('dummy_kuis_kejawab', $data);
			$this->load->view('footer');
		}
	}

	public function filled_kuis() {

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
					$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->new_login($message);
					break;
				case 'home':
					/*$message = array('type' => 'error_message', 'message' => $cek['message']);
					return $this->index($message);*/
					$this->session->set_flashdata('error_message', $cek['message']);
					redirect(base_url());
					break;
			}
		}
		
		$result = $this->Kuis_model->get_filled_kuis();

		$data['result'] = $result;

		$this->load->view('header');
		$this->load->view('kuis_admin', $data);
		$this->load->view('footer');
	
	}

}	
 ?>