<?php 

class TestView extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		$this->load->model('Perkenalan_model');
	}

	public function accept_perkenalan(){
		$this->load->view('header');
		$this->load->view('accept_perkenalan');
		$this->load->view('footer');
	}

	public function angkatan(){
		$this->load->view('header');
		$this->load->view('angkatan');
		$this->load->view('footer');
	}

	public function change_profile(){
		$this->load->view('header');
		$this->load->view('change_profile');
		$this->load->view('footer');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function kating(){
		$this->load->view('header');
		$this->load->view('kating');
		$this->load->view('footer');
	}

	public function kuis_struktur(){
		$this->load->view('header');
		$this->load->view('kuis_struktur');
		$this->load->view('footer');
	}

	public function login(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function my_request(){
		$this->load->view('header');
		$this->load->view('my_request');
		$this->load->view('footer');
	}

	public function new_login(){
		$this->load->view('header');
		$this->load->view('new_login');
		$this->load->view('footer');
	}

	public function profil(){
		$this->load->view('header');
		$this->load->view('profil');
		$this->load->view('footer');
	}

	public function request_list(){
		$this->load->view('header');
		$this->load->view('request_list');
		$this->load->view('footer');
	}

	public function request_perkenalan(){
		$this->load->view('header');
		$this->load->view('request_perkenalan');
		$this->load->view('footer');
	}

	public function admin(){
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
	}

	//view ini cuma buat testing backend
	public function test_request_perkenalan_angkatan(){
		$this->load->view('header');
		$this->load->view('testing_request_angkatan');
		$this->load->view('footer');
	}


}
 ?>