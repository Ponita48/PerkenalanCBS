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
			
			$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
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
			$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
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
			$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
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

	public function approvePerkenalan($id_perkenalan) {
		
		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				echo "harus admin";
				die();
			}else {

				date_default_timezone_set('Asia/Jakarta');
				$date = date("Y-m-d H:i:s", time());

				$data = array(
					'status' => 1,
					'approve_time' => $date
				);

				$result = $this->Admin_model->approveRejectPerkenalan($id_perkenalan, $data);

				if ($result == FALSE) {
					$data['message_display'] = "gagal? tidak ada id perkenalan tersebut?";
					echo $data['message_display'];
					die();
					//goto jumlah perkenalan
				}else {
					echo "<pre>";
					var_dump($result);
					echo "</pre>";
					echo "telah diapprove";
					die();
					//goto jumlah perkenalan
				}
			}
		}	
	}

	public function rejectPerkenalan($id_perkenalan) {
		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				echo "harus admin";
				die();
			}else {

				date_default_timezone_set('Asia/Jakarta');
				$date = date("Y-m-d H:i:s", time());

				$data = array(
					'status' => 2,
					'approve_time' => $date
				);

				$result = $this->Admin_model->approveRejectPerkenalan($id_perkenalan, $data);

				if ($result == FALSE) {
					$data['message_display'] = "gagal? tidak ada id perkenalan tersebut?";
					echo $data['message_display'];
					die();
					//goto jumlah perkenalan
				}else {
					echo "<pre>";
					var_dump($result);
					echo "</pre>";
					echo "telah direject";
					die();
					//goto jumlah perkenalan
				}
			}
		}	
	}

}

 ?>