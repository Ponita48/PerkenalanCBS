<?php 

/**
* 
*/
class TestViewController extends CI_Controller {
	
	public function admin() {
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
	}

}

 ?>