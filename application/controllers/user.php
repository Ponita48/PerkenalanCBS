<?php 

class User extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		$this->load->model('User_model');
	}

	public function index() {
		
		//$this->User_model->aihihi();

		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function angkatan() {
		$this->load->view('header');
		$this->load->view('angkatan');
		$this->load->view('footer');
	}

	public function perkenalan() {
		$this->load->view('header');
		$this->load->view('kating');
		$this->load->view('footer');
	}

	public function profil_senior() {

		$this->load->view('header');
		$this->load->view('profil_kating');
		$this->load->view('footer');
	}

	public function request() {

		$this->load->view('header');
		$this->load->view('request_perkenalan');
		$this->load->view('footer');
	}

	//login function
	public function login() {
		//formValidation
		$this->form_validation->set_rules('npm', 'NPM', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		//cekValidation
		if ($this->form_validation->run() == FALSE) {
			//When error
			//load login form
			$this->load->view('header');
			$this->load->view('new_login');
			$this->load->view('footer');
		}else {

			//Get data login
			$data = array(
				'npm' => $this->input->post('npm'),
				'password' => $this->input->post('password')
			);

			//check username and password
			$result = $this->User_model->loginNoHash($data);


			if ($result == FALSE) {
				//when username or password wrong
				$data['error_message'] = "Username atau password salah";
				$this->load->view('header');
				$this->load->view('login', $data);
				$this->load->view('footer');
			}else {
				//when username or password correct
				//insert username and password to session

				$session_data = array(
					'npm' => $data['npm'],
					'password' => $data['password']
				);

				$this->session->set_userdata('logged_in', $session_data);

				//cek email
				if ($result->row('email') == NULL) {
					//masukkan email dan password baru
					$this->load->view('new_login');
				}else {
					//login success
					//back to home
					$data['message_display'] = "Successfully login";
					$this->load->view('home', $data);
				}
			}

		}
	}

	//logout function
	public function logout() {
		//delete session
		$this->session->unset_userdata('logged_in');

		//back to home
		$data['message_display'] = "Successfully Logout";
		$this->load->view('home', $data);
	}


	public function new_login() {
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('new_pass', 'New Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('new_login');
		}else {
			$password = password_hash($this->input->post('new_pass'), PASSWORD_DEFAULT);

			$data = array(
				'npm' => $this->session->userdata['logged_in']['npm'], 
				'password' => $password,
				'email' => $this->input->post('email'),
				'role' => $this->session->userdata['logged_in']['role']
			);

			$this->User_model->new_login($data);
		}
	}

	public function edit_profile() {
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat_kos', 'Alamat Kos', 'required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required');
		$this->form_validation->set_rules('id_line', 'ID Line', 'required');

		if ($this->session->userdata['logged_in']['role'] == 'maba') {
			$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');
			$this->form_validation->set_rules('motto_hidup', 'Motto Hidup', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$result = $this->User_model->getProfile();

			$this->load->view('edit_profile', $result);
		}else {
			$data1['email'] = $this->input->post('email');
			$data2 = array(
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'alamat_kos' => $this->input->post('alamat_kos'),
				'no_hp' => $this->input->post('no_hp'),
				'id_line' => $this->input->post('id_line')
			);
			if ($this->session->userdata['logged_in']['role'] == 'maba') {
				$data2 = array(
					'link_foto' => $this->input->post('link_foto'),
					'motto_hidup' => $this->input->post('motto_hidup')
				);
			}

			$result = $this->User_model->setProfile($data1, $data2);

			if ($result == FALSE) {
				$data['error_message'] = "Error";
				$this->load->view('edit_profile', $data);
			}else {
				$data['message_display'] = "Success";
				$this->load->view('edit_profile', $data);
			}
		}
	}

	public function search() {

		$keySearch = $this->post('keySearch');
		$keyArray = explode(" ",$keySearch);

		$keySearch = '%';

		foreach ($keyArray as $value) {
			$keySearch = $keySearch.$value.'%';
		}

		$result = $this->User_model->search($keySearch);

		if ($result) {
			$data['message_display'] = 'Not Found';
			$this->load->view('search', $data);
		}else {
			$this->load->view('search', $data);
		}
		
	}


	public function propil() {
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}

}
 ?>