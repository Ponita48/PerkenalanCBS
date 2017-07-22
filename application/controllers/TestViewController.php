<?php 

/**
* 
*/
class TestViewController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library('session');
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

	public function upload() {
		$this->load->view('header');
		$this->load->view('testMultipart');
		$this->load->view('footer');
	}

	public function test_upload() {

		

		//echo $this->upload->data('file_name')."</br>";

		$config = array(
			'upload_path' => './Photos/PP/',
			'allowed_types' => 'jpg|png',
			'max_size' => 300,
			'file_name' => $this->session->userdata['logged_in']['id_user'],
			'overwrite' => TRUE,
		);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('pp')) {
			echo $this->upload->display_errors();
		}else {
			echo $this->upload->data('file_name');	
		}

		

		die();

	}	

	public function req_ang()
	{
		$this->load->view('header');
		$this->load->view('request_angkatan');
		$this->load->view('footer');
	}

}

 ?>