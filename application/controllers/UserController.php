<?php 

class UserController extends CI_Controller
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
			$this->load->view('login');
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
					$data['message_display'] = "Successfully login";
					$this->load->view('header');
					$this->load->view('index', $data);
					$this->load->view('footer');
				}
			}

		}
	}

	//logout function
	public function logout() {
		//delete session
		$this->session->unset_userdata('logged_in');
		//$this->session->unset_userdata('role');

		//back to home
		$data['message_display'] = "Successfully Logout";
		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);
	}

	// login for the first time
	public function new_login() {

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
				'max_size' => 300,
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

	//edit profile, peserta or keluarga
	public function edit_profile() {

		if (! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
			// $data['error_message'] = "login dulu cuk!";
			// echo $data['error_message'];
			// die();
		}else {
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
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'alamat_kos' => $this->input->post('alamat_kos'),
					'no_hp' => $this->input->post('no_hp'),
					'id_line' => $this->input->post('id_line')
				);
				if ($this->session->userdata['logged_in']['role'] == 'peserta') {
					$data2['motto_hidup'] = $this->input->post('motto_hidup');
				}

				$result = $this->User_model->setProfile($data1, $data2);

				if ($result == FALSE) {
					echo "disini";
					$data['error_message'] = "Error";
					$this->load->view('header');
					$this->load->view('change_profile', $data);
					$this->load->view('footer');
				}else {
					$data['message_display'] = "Success";
					$this->load->view('header');
					$this->load->view('change_profile', $data);
					$this->load->view('footer');
				}
			}
		}

	}

	public function search($key = NULL) {
		
		//echo $this->input->get('keySearch');

		if (! isset($this->session->userdata['logged_in'])) {
			/*$data['error_message'] = "login dulu cuk!";
			echo $data['error_message'];
			die();*/
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
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
				// echo $data['message_display'];
				// die();
			}else {
				$data['hasil'] = $result;
				// echo "<pre>";
				// var_dump($result);
				// echo "</pre>";
				// die();
			}
			$this->load->view('header');
			$this->load->view('search', $data);
			$this->load->view('footer');
		}
	}
	
	public function lihat_profile($id) {

		if (! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
			// echo $data['message_display'];
			// die();
		}else {
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
				$this->load->view('header');
				$this->load->view('profil', $data);
				$this->load->view('footer');
				// echo "<pre>";
				// var_dump($result);
				// echo "</pre>";
				// die();
			}
		}

	}

	public function get_angkatan($angkatan = 2017) {
		
		if (! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			$result = $this->User_model->get_angkatan($angkatan);

			if ($result == FALSE) {
				$data['error_message'] = "Maaf, angkatan tidak dapat ditemukan";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$data['result'] = $result;
				$this->load->view('header');
				$this->load->view('kating', $data);
				$this->load->view('footer');
			}
		}
	}

	public function get_angkatan_2017() {
		
		if (! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {

			$angkatan = 2017;

			$result = $this->User_model->get_angkatan($angkatan);

			if ($result == FALSE) {
				// echo "angkatan ga ada coeg";
				$data['error_message'] = "Maaf, angkatan tidak dapat ditemukan";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$data['result'] = $result;
				$this->load->view('header');
				$this->load->view('angkatan',$data);
				$this->load->view('footer');
			}
		}

	}

	public function request() {

		$this->load->view('header');
		$this->load->view('request_perkenalan');
		$this->load->view('footer');
	}

	public function accept() {

		$this->load->view('header');
		$this->load->view('accept_perkenalan');
		$this->load->view('footer');
	}

	public function request_list() {

		$this->load->view('header');
		$this->load->view('request_list');
		$this->load->view('footer');
	}
	public function my_request() {

		$this->load->view('header');
		$this->load->view('my_request');
		$this->load->view('footer');
	}

}
 ?>