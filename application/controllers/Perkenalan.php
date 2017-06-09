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
		date_default_timezone_set('Asia/Jakarta');
		$date = time();
		echo $date;
		die();
		$this->form_validation->set_rules('nama', 'Nama Keluarga', 'required');
		$this->form_validation->set_rules('ciri_khas', 'Ciri Khas', 'required');
		$this->form_validation->set_rules('link_foto', 'Link Foto', 'required');

		if ($this->form_validation->run() == FALSE) {
			//$this->
		}else {
			$data = array(
				'id_keluarga' => $id,
				'nama' => $this->input->post('nama'),
				'ciri_khas' => $this->input->post('ciri_khas'),
				'link_foto' => $this->input->post('link_foto')
			);
			
		}


		$result = $this->Perkenalan_model->request_keluarga($data);
	}

	

}
 ?>