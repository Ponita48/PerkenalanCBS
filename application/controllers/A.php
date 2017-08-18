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
		$this->load->model(array('Admin_model', 'User_model'));
	}

	//cek sudah pernah login atau belum dengan cara mengecek email null atau tidak
	public function cek_login() {
		if ( ! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Harap login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('login', $data);
			$this->load->view('footer');
			return FALSE;
		}else {
			if ($this->User_model->cek_email($this->session->userdata['logged_in']['id_user'], "id_user") == NULL) {
				$message['error_message'] = "Harap mengisi form ini terlebih dahulu";
				$this->load->view('header');
				$this->load->view('new_login', $message);
				$this->load->view('footer');
				return FALSE;
			}
		}

		return TRUE;
	}

	public function perkenalanKeluarga() {

		if($this->cek_login() == FALSE) {
			return;
		}

		if (! isset($this->session->userdata['logged_in'])) {
			
			/*$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
			die();*/
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				$data['error_message'] = "Hanya admin yang dapat melihat konten ini";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$result = $this->Admin_model->getPerkenalanKeluarga();

				if ($result == FALSE) {
					$data['message_display'] = "Perkenalan kosong?";
					//goto list perkenalan
					$this->load->view('header');
					$this->load->view('admin',$data);
					$this->load->view('footer');
				}else {
					//goto list perkenalan
					$data['result'] = $result;
					$this->load->view('header');
					$this->load->view('admin',$data);
					$this->load->view('footer');
				}
			}
		}
	}

	public function perkenalanAngkatan($id = NULL) {

		if($this->cek_login() == FALSE) {
			return;
		}

		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {

			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				$result = $this->Admin_model->getPerkenalanAngkatan($this->session->userdata['logged_in']['id_user']);
			}else {

				if ($id == NULL) {
					$data['error_message'] = "Parameter tidak boleh kosong";
					$this->load->view('header');
					$this->load->view('index', $data);
					$this->load->view('footer');
				}

				$result = $this->Admin_model->getPerkenalanAngkatan($id);

			}
			if ($result == FALSE) {
				$data['error_message'] = "Perkenalan kosong";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				// echo "<pre>";
				// var_dump($result);
				// echo "</pre>";
				// foreach ($result as $key) {
				// 	echo $key->id_perkenalan_angkatan.'\n';
				// }
				$data['result'] = $result;
				$this->load->view('header');
				$this->load->view('perkenalan_angkatan', $data);
				$this->load->view('footer');
				// die();
				//goto list perkenalan
			}
		}
	}

	public function jumlahPerkenalan() {

		if($this->cek_login() == FALSE) {
			return;
		}

		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			/*$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
			die();*/
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				/*die();*/
				$data['error_message'] = "Hanya admin yang dapat melihat konten ini";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$result = $this->Admin_model->getJumlahPerkenalan();

				if ($result == FALSE) {
					$data['message_display'] = "Perkenalan kosong?";
					// echo $data['message_display'];
					// die();
					//goto jumlah perkenalan
					$this->load->view('header');
					$this->load->view('admin_request', $data);
					$this->load->view('footer');
				}else {
					//goto jumlah perkenalan
					$data['result'] = $result;
					$this->load->view('header');
					$this->load->view('admin_request', $data);
					$this->load->view('footer');
				}
			}
		}
	}

	public function approvePerkenalan($id_perkenalan) {

		if($this->cek_login() == FALSE) {
			return;
		}

		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				$data['error_message'] = "Hanya admin yang dapat melihat konten ini";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {

				date_default_timezone_set('Asia/Jakarta');
				$date = date("Y-m-d H:i:s", time());

				$data = array(
					'status' => 1,
					'approve_time' => $date
				);

				$result = $this->Admin_model->approveRejectPerkenalan($id_perkenalan, $data);

				if ($result == FALSE) {
					//goto jumlah perkenalan
					$data['error_message'] = "gagal? tidak ada id perkenalan tersebut";
					$this->load->view('header');
					$this->load->view('index', $data);
					$this->load->view('footer');
				}else {
					//goto jumlah perkenalan
					redirect('../admin');
				}
			}
		}	
	}

	public function rejectPerkenalan($id_perkenalan) {

		if($this->cek_login() == FALSE) {
			return;
		}

		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			/*$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
			die();*/
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				/*echo "harus admin";
				die();*/
				$data['error_message'] = "Hanya admin yang dapat melihat konten ini";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {

				date_default_timezone_set('Asia/Jakarta');
				$date = date("Y-m-d H:i:s", time());

				$data = array(
					'status' => 2,
					'approve_time' => $date
				);

				$result = $this->Admin_model->approveRejectPerkenalan($id_perkenalan, $data);

				if ($result == FALSE) {
					$data['error_message'] = "gagal? tidak ada id perkenalan tersebut";
					$this->load->view('header');
					$this->load->view('index', $data);
					$this->load->view('footer');
					//goto jumlah perkenalan
				}else {
					//goto jumlah perkenalan
					redirect('../admin');
				}
			}
		}	
	}

	public function detailPerkenalan($id_perkenalan = NULL) {

		if($this->cek_login() == FALSE) {
			return;
		}
		
		if (! isset($this->session->userdata['logged_in'])) {
			
			/*$data['error_message'] = "Login dulu cuk!";
			echo $data['error_message'];
			die();*/
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				//goto home
				$data['error_message'] = "Hanya admin yang dapat melihat konten ini";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {

				if ($id_perkenalan == NULL) {
					$data['error_message'] = "id_perkenalan tidak boleh kosong";
					$this->load->view('header');
					$this->load->view('index', $data);
					$this->load->view('footer');
				}else {
					$result = $this->Admin_model->getDetailPerkenalan($id_perkenalan);

					if ($result == FALSE) {
						$data['error_message'] = "id_perkenalan tidak ditemukan";
						$this->load->view('header');
						$this->load->view('index', $data);
						$this->load->view('footer');
					}else {
						$data['result'] = $result;
						$this->load->view('header');
						$this->load->view('accept_perkenalan', $data);
						$this->load->view('footer');
					}
				}
			}
		}

	}

}

 ?>