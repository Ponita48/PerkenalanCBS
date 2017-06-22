<?php 

/**
* 
*/
class A extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		$this->load->model('Admin_model');
	}

	public function getPerkenalan($) {
		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				die();
			}else {
				$result = $this->Admin_model->getPerkenalan();
			}
		}
	}

}

 ?>