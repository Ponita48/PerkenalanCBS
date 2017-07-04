<?php 

class Perkenalan extends CI_Controller
{
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		$this->load->model('Perkenalan_model');
	}

	public function request_keluarga($id) {

		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			echo "belum login";
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'peserta') {
				$this->load->view('header');
				$this->load->view('index');
				$this->load->view('footer');
			}else {
				date_default_timezone_set('Asia/Jakarta');
				$date = date("Y-m-d H:i:s", time());
				//echo date("Y M D H:i:s", time());
				//die();
				$this->form_validation->set_rules('nama', 'Nama Keluarga', 'required');
				$this->form_validation->set_rules('ciri_khas', 'Ciri Khas', 'required');
				$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');

				if ($this->form_validation->run() == FALSE) {
					
					//redirect();
				}else {
					$data = array(
						'id_keluarga' => $id,
						'nama' => $this->input->post('nama'),
						'ciri_khas' => $this->input->post('ciri_khas'),
						'link_foto' => $this->input->post('link_foto'),
						'request_time' => $date
					);

					//fungsi untuk mengubah datetime menjadi timestamp
					/*echo strtotime($data['request_time']);
					die();*/
					
					$result = $this->Perkenalan_model->request_keluarga($data);

					if (!$result) {
						$data['error_message'] = "Error";
						echo "fail";
						//redirect();
					}else {
						$data['message_display'] = "Success";
						echo "success";
						//redirect();
					}
				}
			}
		}
	}

	public function request_peserta($id) {

		if (! isset($this->session->userdata['logged_in'])) {
			//goto home
			echo "belum login";
			die();
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'peserta') {
				$this->load->view('header');
				$this->load->view('index');
				$this->load->view('footer');
			}
			
			date_default_timezone_set('Asia/Jakarta');
			$date = date("Y-m-d H:i:s", time());
			//$date = time();
			//echo date("M D Y H:i:s", $date);
			//die();
			$this->form_validation->set_rules('nama', 'Nama Keluarga', 'required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
			$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
			$this->form_validation->set_rules('alamat_kos', 'Alamat Kos', 'required');
			$this->form_validation->set_rules('id_line', 'Id Line', 'required');
			$this->form_validation->set_rules('no_hp', 'No HP', 'required');
			$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');

			if ($this->form_validation->run() == FALSE) {
				//redirect();
			}else {
				$data = array(
					'id_user2' => $id,
					'nama' => $this->input->post('nama'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'alamat_kos' => $this->input->post('alamat_kos'),
					'id_line' => $this->input->post('id_line'),
					'no_hp' => $this->input->post('no_hp'),
					'link_foto' => $this->input->post('link_foto'),
					'request_time' => $date
				);
				
				$result = $this->Perkenalan_model->request_angkatan($data);

				if (!$result) {
					$data['error_message'] = "Error";
					//redirect();
					echo "fail";
				}else {
					$data['message_display'] = "Success";
					//redirect();
					echo "success";
				}
			}
		}
	}

}
 ?>