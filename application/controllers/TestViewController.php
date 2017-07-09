<?php 

/**
* 
*/
class TestViewController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function admin() {
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
	}

	public function admin_request() {
		$this->load->view('header');
		$this->load->view('admin_request');
		$this->load->view('footer');
	}
	public function search() {
		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('footer');
	}

	public function accept_perkenalan() {
		$this->load->view('header');
		$this->load->view('accept_perkenalan');
		$this->load->view('footer');
	}

	public function my_request() {
		$this->load->view('header');
		$this->load->view('my_request');
		$this->load->view('footer');	
	}

}

 ?>