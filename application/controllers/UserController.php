<?php 

class UserController extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session', 'auth'));
		$this->load->database();
		$this->load->model('User_model');
	}

	public function index($message = NULL) {

		$data = NULL;

		if ($message != NULL) {
			if ($message['type'] == 'error_message') {
				$data['error_message'] = $message['message'];
			}else {
				$data['message_display'] = $message['message'];
			}
		}

		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
	
	//login function
	public function login($message = NULL) {

		$cek = $this->auth->cek_login();

		if ($cek['result'] == TRUE) {
			$this->session->set_flashdata('error_message', 'Maaf anda sudah login');
			redirect(base_url());
		}

		//formValidation
		$this->form_validation->set_rules('npm', 'NPM', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		//cekValidation
		if ($this->form_validation->run() == FALSE) {
			//When error
			//load login form
			$data = NULL;
			if ($message != NULL) {
				if ($message['type'] == 'error_message') {
					$data['error_message'] = $message['message'];
				}else {
					$data['message_display'] = $message['message'];
				}
			}
			$this->load->view('header');
			$this->load->view('login', $data);
			$this->load->view('footer');
		}else {
			
			//Get data login
			$data = array(
				'npm' => $this->input->post('npm'),
				'password' => $this->input->post('password')
			);

			$role = $this->User_model->cek_role($data['npm']);

			if ($role == NULL) {
				$this->session->set_flashdata('error_message', 'User tidak ditemukan');
				redirect(base_url().'login');
			}else {

				$email = $this->User_model->cek_email($data['npm'], "npm");
				
				//check username and password
				if ($role == 'admin' || $email == NULL) {
					$result = $this->User_model->loginNoHash($data);
				}else {
					$result = $this->User_model->login($data);
				}

				if ($result == FALSE) {
					$this->session->set_flashdata('error_message', 'Username atau password salah');
					redirect(base_url().'login');
				}else {
					//when username or password correct
					//insert username and password to session
					
					$session_data = array(
						'npm' => $data['npm'],
						'password' => $data['password'],
						'role' => $result->role,
						'id_user' => $result->row('id_user')
					);

					$this->session->set_userdata('logged_in', $session_data);
					
					//cek email
					if ($result->row('email') == NULL) {
						//masukkan email dan password baru
						$this->new_login();
					}else {
						//login success
						//back to home
						$this->session->set_flashdata('message_display', 'Successfully login');
						redirect(base_url());
					}
				}	
			}

		}
	}

	//logout function
	public function logout() {
		//delete session
		$this->session->unset_userdata('logged_in');
		
		//back to home
		$this->session->set_flashdata('message_display', 'Successfully logout');
		redirect(base_url());
	}

	// login for the first time
	public function new_login($message = NULL) {

		if (empty($this->input->post('submit'))) {
			$data = NULL;
			if ($message != NULL) {
				if ($message['type'] == 'error_message') {
					$data['error_message'] = $message['message'];
				}else {
					$data['message_display'] = $message['message'];
				}
			}
			$this->load->view('header');
			$this->load->view('new_login', $data);
			$this->load->view('footer');
		}else {
			if (empty($_FILES['pp']['name'])) {
				$this->form_validation->set_rules('pp', 'Photo Profile', 'required');	
			}
			
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('new_pwd', 'New Password', 'required|min_length[6]');
			$this->form_validation->set_rules('conf_pwd', 'Confirm Password', 'required|min_length[6]|matches[new_pwd]');

			if ($this->form_validation->run() == FALSE) {
				//echo $this->input->post('new_pwd')."</br>";
				//echo $this->input->post('conf_pwd')."</br>";
				//echo validation_errors();
				
				$this->load->view('header');
				$this->load->view('new_login');
				$this->load->view('footer');
			}else {
				// echo "bisa(?)";

				$id_user = $this->session->userdata['logged_in']['id_user'];

				$config = array(
					'upload_path' => './Photos/PP/',
					'allowed_types' => 'jpg|png',
					'max_size' => 0,
					'file_name' => $id_user,
					'overwrite' => TRUE,
				);

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('pp')) {
					$data['error_message'] = $this->upload->display_errors();
					$this->load->view('header');
					$this->load->view('new_login', $data);
					$this->load->view('footer');
				}else {

					$file_name = base_url()."Photos/PP/".$this->upload->data('file_name');

					$result = $this->User_model->assign_photo($file_name, $id_user);

					if ( ! $result) {
						$data['error_message'] = "There are errors";
						$this->load->view('header');
						$this->load->view('new_login', $data);
						$this->load->view('footer');
					}else {
						$password = password_hash($this->input->post('new_pwd'), PASSWORD_DEFAULT);

						$data = array(
							'id_user' => $this->session->userdata['logged_in']['id_user'], 
							'password' => $password,
							'email' => $this->input->post('email'),
							'role' => $this->session->userdata['logged_in']['role'],
						);

						$this->User_model->new_login($data);
						$data['message_display'] = "Password berhasil diganti";
						$this->load->view('header');
						$this->load->view('index', $data);
						$this->load->view('footer');
					}
				}
			}
		}
	}

	//edit profile, peserta or keluarga
	public function edit_profile() {
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

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat_kos', 'Alamat Kos', 'required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required');
		$this->form_validation->set_rules('id_line', 'ID Line', 'required');

		if ($this->session->userdata['logged_in']['role'] == 'peserta') {
			//$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');
			$this->form_validation->set_rules('motto_hidup', 'Motto Hidup', 'required');
		}

		if ($this->User_model->cek_email($this->session->userdata['logged_in']['id_user'], "id_user") == NULL) {
			$message['error_message'] = "Untuk mengubah profile, silahkan isi form berikut ini!";
			$this->load->view('header');
			$this->load->view('new_login', $message);
			$this->load->view('footer');
		}else {
			$result = $this->User_model->getProfile();

			$data['result'] = $result[0];

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('header');
				$this->load->view('change_profile', $data);
				$this->load->view('footer');
			}else {
				$data1['email'] = $this->input->post('email');
				$data2 = array(
					'nama' => $this->input->post('nama'),
					'jk' => $this->input->post('jk'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tgl_lahir' => date("Y-m-d", strtotime($this->input->post('tgl_lahir'))),
					'alamat_kos' => $this->input->post('alamat_kos'),
					'no_hp' => $this->input->post('no_hp'),
					'id_line' => $this->input->post('id_line')
				);
				if ($this->session->userdata['logged_in']['role'] == 'peserta') {
					$data2['motto_hidup'] = $this->input->post('motto_hidup');
				}

				$result = $this->User_model->setProfile($data1, $data2);

				if ($result == FALSE) {
					$result = $this->User_model->getProfile();
					$data['result'] = $result[0];
					$data['error_message'] = "Error";
					$this->load->view('header');
					$this->load->view('change_profile', $data);
					$this->load->view('footer');
				}else {
					/*$this->lihat_profile($this->session->userdata['logged_in']['id_user'], '', "Profile berhasil diganti");*/
					$this->session->set_flashdata('message_display', 'Profile berhasil diganti');
					redirect(base_url().'profile/'.$this->session->userdata['logged_in']['id_user']);
				}
			}
		}
		
	}

	public function search($key = NULL) {

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

		//echo $this->input->get('keySearch');	
		//$keySearch = $_GET['keySearch'];
		$keySearch = $this->input->get('keySearch');
		$keyArray = explode(" ",$keySearch);

		$keySearch = '%';

		foreach ($keyArray as $value) {
			$keySearch = $keySearch.$value.'%';
		}
		$result = $this->User_model->search($keySearch);

		if (! $result) {
			$data['error_message'] = 'Not Found';
		}else {
			$data['hasil'] = $result;
		}
		$this->load->view('header');
		$this->load->view('search', $data);
		$this->load->view('footer');
		
	}

	public function hintSearch($keySearch)
	{
		$keyArray = explode(" ",$keySearch);

		$keySearch = '%';

		foreach ($keyArray as $value) {
			$keySearch = $keySearch.$value.'%';
		}
		$result = $this->User_model->search($keySearch);
		$data['result'] = $result;

		return $this->load->view('ajax_search',$data);
	}
	
	public function lihat_profile($id, $error_message = NULL, $message = NULL) {

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

		$result = $this->User_model->getProfile($id);

		if ($result == FALSE) {
			$data['error_message'] = "Maaf, Profile tidak ditemukan";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
			//goto ?
			// echo "profile tidak ditemukan";
			// die();
		}else {
			//goto ?
			$data['result'] = $result[0];
			if ($error_message != NULL) {
				$data['error_message'] = $error_message;
			}else {
				$data['message_display'] = $message;
			}
			$this->load->view('header');
			$this->load->view('profil', $data);
			$this->load->view('footer');
		}
	}

	public function get_angkatan($angkatan = 2017) {

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

		$result = $this->User_model->get_angkatan($angkatan);

		if ($result == FALSE) {
			$this->session->set_flashdata('error_message', 'Maaf, angkatan tidak dapat ditemukan');
			redirect(base_url());
		}else {
			$data['result'] = $result;
			$this->load->view('header');
			$this->load->view('kating', $data);
			$this->load->view('footer');
		}
	}

	public function get_angkatan_2017() {

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
		
		$angkatan = 2017;

		$result = $this->User_model->get_angkatan($angkatan);

		if ($result == FALSE) {
			// echo "angkatan ga ada coeg";
			$this->session->set_flashdata('error_message', 'Maaf, angkatan tidak dapat ditemukan');
			redirect(base_url());
		}else {
			$data['result'] = $result;
			$this->load->view('header');
			$this->load->view('angkatan',$data);
			$this->load->view('footer');
		}
	}

	

	public function accept() {

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

		$this->load->view('header');
		$this->load->view('accept_perkenalan');
		$this->load->view('footer');
	}

	public function request_list() {

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

		$this->load->view('header');
		$this->load->view('request_list');
		$this->load->view('footer');
	}
	public function my_request() {

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

		$this->load->view('header');
		$this->load->view('my_request');
		$this->load->view('footer');
	}

	public function view_baru_login()
	{
		$cek = $this->auth->cek_login();

		if ($cek['result'] == FALSE) {
			if ($cek['code'] == 'login') {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'login');
			}else {
				$this->session->set_flashdata('error_message', $cek['message']);
				redirect(base_url().'new_login/submit');
			}
		}

		$this->load->view('header');
		$this->load->view('new_login');
		$this->load->view('footer');
	}

	public function change_pp()
	{

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

		$id_user = $this->session->userdata['logged_in']['id_user'];

		if (empty($_FILES['pp']['name'])) {
			$this->session->set_flashdata('error_message', "Photo tidak boleh kosong");
			redirect(base_url().'profile/'.$id_user);
		}
		
		$config = array(
			'upload_path' => './Photos/PP/',
			'allowed_types' => 'jpg|png',
			'max_size' => 0,
			'file_name' => $id_user,
			'overwrite' => TRUE,
		);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('pp')) {
			$this->session->set_flashdata('error_message', $this->upload->display_errors());
			redirect(base_url().'profile/'.$id_user);
		}else {

			$file_name = base_url()."Photos/PP/".$this->upload->data('file_name');

			$result = $this->User_model->assign_photo($file_name, $id_user);

			if ( ! $result) {
				$this->session->set_flashdata('error_message', "There are errors");
				redirect(base_url().'profile/'.$id_user);
			}else {
				$this->session->set_flashdata('message_display', "Photo Profile berhasil diubah");
				redirect(base_url().'profile/'.$id_user);
			}
		}
	
	}

}
 ?>