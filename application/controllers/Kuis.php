<?php 

/**
* 
*/
class Kuis extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Kuis_model', 'User_model'));
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
	}

	public function view_kuis() {

		if ( ! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {

			if ($this->session->userdata['logged_in']['role'] == 'admin') {
				redirect('/kuis/filled');
			}

			$npm = $this->User_model->get_npm($this->session->userdata['logged_in']['id_user']);

			$filled = $this->Kuis_model->cek_filled_kuis($npm);

			if ($filled == NULL) {
				$data['npm'] = $npm;

				$this->load->view('header');
				$this->load->view('kuis_struktur', $data);
				$this->load->view('footer');
			}else {
				redirect('/kuis/jawaban');
			}
		}
	}

	public function isi_kuis() {
		if ( ! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {

			if ($this->session->userdata['logged_in']['role'] == 'admin') {
				redirect('/kuis/filled');
			}

			$npm = $this->User_model->get_npm($this->session->userdata['logged_in']['id_user']);
		
			$data['npm'] = $npm;

			$this->load->view('header');
			$this->load->view('kuis_struktur', $data);
			$this->load->view('footer');			
		}
	}

	public function kuis_struktur_submit() {

		$npm_maba = $this->session->userdata['logged_in']['npm'];

		$panitia = $this->input->post('panitia');

		$be = $this->input->post('be');

		$dpa = $this->input->post('dpa');

		$presidium = $this->input->post('presidium');

		foreach ($panitia as $jabatan => $info) {
			$this->Kuis_model->insert_panitia($npm_maba, $info['nama'], $jabatan, $info['link_foto']);
		}

		foreach ($be as $jabatan => $info) {
			$this->Kuis_model->insert_bk($npm_maba, $info['nama'], $jabatan, 'be', $info['link_foto']);
		}

		foreach ($dpa as $jabatan => $info) {
			$this->Kuis_model->insert_bk($npm_maba, $info['nama'], $jabatan, 'dpa', $info['link_foto']);
		}

		foreach ($presidium as $jabatan => $info) {
			$this->Kuis_model->insert_bk($npm_maba, $info['nama'], $jabatan, 'presidium', $info['link_foto']);
		}

		redirect('../kuis/jawaban');

	}

	public function get_kuis($id_user = NULL) {
		if ( ! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {

			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				$npm = $this->session->userdata['logged_in']['npm'];
			}else {
				$npm = $this->User_model->get_npm($id_user);
				if ($npm == NULL) {
					$data['error_message'] = "user tidak ditemukan";
					$this->load->view('header');
					$this->load->view('index', $data);
					$this->load->view('footer');
					return 0;
				}
			}

			$panitia = $this->Kuis_model->get_kuis_panitia($npm);

			$be = $this->Kuis_model->get_kuis_bk($npm, 'be');

			$dpa = $this->Kuis_model->get_kuis_bk($npm, 'dpa');

			$presidium = $this->Kuis_model->get_kuis_bk($npm, 'presidium');

			$data = array(
				'npm' => $npm,
				'panitia' => $panitia,
				'be' => $be,
				'dpa' => $dpa,
				'presidium' => $presidium
			);

			if ($panitia == NULL || $be == NULL || $dpa == NULL || $presidium == NULL) {
				$data['error_message'] = "user belum mengisi kuis";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$this->load->view('header');
				$this->load->view('dummy_kuis_kejawab', $data);
				$this->load->view('footer');
			}

		}

	}

	public function filled_kuis() {
		if ( ! isset($this->session->userdata['logged_in'])) {
			$data['error_message'] = "Silahkan login terlebih dahulu";
			$this->load->view('header');
			$this->load->view('index', $data);
			$this->load->view('footer');
		}else {
			if ($this->session->userdata['logged_in']['role'] != 'admin') {
				$data['error_message'] = "Hanya admin yang dapat melihat konten ini";
				$this->load->view('header');
				$this->load->view('index', $data);
				$this->load->view('footer');
			}else {
				$result = $this->Kuis_model->get_filled_kuis();

				$data['result'] = $result;

				$this->load->view('header');
				$this->load->view('kuis_admin', $data);
				$this->load->view('footer');
			}
		}
	}

}	
 ?>