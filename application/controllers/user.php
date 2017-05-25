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
				$this->load->view('login', $data);
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

	public function propil() {
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
}
 ?>