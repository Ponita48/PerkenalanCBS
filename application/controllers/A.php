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

	public function perkenalanKeluarga() {
		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				die();
			}else {
				$result = $this->Admin_model->getPerkenalanKeluarga();

				if ($result == FALSE) {
					$data['message_display'] = "Perkenalan kosong?";
					echo $data['message_display'];
					die();
					//goto list perkenalan
				}else {
					echo "<pre>";
					var_dump($result);
					echo "</pre>";
					die();
					//goto list perkenalan
				}
			}
		}
	}

	public function perkenalanAngkatan($id = NULL) {
		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			die();
		}else {

			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				$result = $this->Admin_model->getPerkenalanAngkatan($this->session->userdata['logged_in']['id_user']);
			}else {

				if ($id == NULL) {
					echo "parameter tidak boleh kosong";
					die();
				}

				$result = $this->Admin_model->getPerkenalanAngkatan($id);

				if ($result == FALSE) {
					$data['message_display'] = "Perkenalan kosong?";
					echo $data['message_display'];
					die();
					//goto list perkenalan
				}else {
					echo "<pre>";
					var_dump($result);
					echo "</pre>";
					die();
					//goto list perkenalan
				}
			}
		}
	}

	public function jumlahPerkenalan() {
		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				die();
			}else {
				$result = $this->Admin_model->getJumlahPerkenalan();

				if ($result == FALSE) {
					$data['message_display'] = "Perkenalan kosong?";
					echo $data['message_display'];
					die();
					//goto jumlah perkenalan
				}else {
					echo "<pre>";
					var_dump($result);
					echo "</pre>";
					die();
					//goto jumlah perkenalan
				}
			}
		}
	}

}

 ?>