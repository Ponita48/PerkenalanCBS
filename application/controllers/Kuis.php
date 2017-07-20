<?php 

/**
* 
*/
class Kuis extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Kuis_model');
		//$this->load->session();
		$this->load->database();
		$this->load->helper('url');
	}

	public function view_kuis()
	{
		$this->load->view('header');
		$this->load->view('kuis_struktur');
		
	}

	
	public function answer_be()
	{
		$data = array(	'nama1' => $this->input->post('nama1') ,
						'jabatan1' => '',
						'lembaga1' => '',
						'nama2' => $this->input->post('nama2') ,
						'jabatan2' => '',
						'lembaga2' => '',
						'nama3' => $this->input->post('nama3') ,
						'jabatan3' => '',
						'lembaga3' => '',
						'nama4' => $this->input->post('nama4') ,
						'jabatan4' => '',
						'lembaga4' => '',
						'nama5' => $this->input->post('nama5') ,
						'jabatan5' => '',
						'lembaga5' => '',
						'nama6' => $this->input->post('nama6') ,
						'jabatan6' => '',
						'lembaga6' => '',
						'nama7' => $this->input->post('nama7') ,
						'jabatan7' => '',
						'lembaga7' => '',
						'nama8' => $this->input->post('nama8') ,
						'jabatan8' => '',
						'lembaga8' => '',
						'nama9' => $this->input->post('nama9') ,
						'jabatan9' => '',
						'lembaga9' => '',
						'nama10' => $this->input->post('nama10') ,
						'jabatan10' => '',
						'lembaga10' => '',
						'nama11' => $this->input->post('nama11') ,
						'jabatan11' => '',
						'lembaga11' => '',
						'nama12' => $this->input->post('nama12') ,
						'jabatan12' => '',
						'lembaga12' => '',
						'nama13' => $this->input->post('nama13') ,
						'jabatan13' => '',
						'lembaga13' => '',
						'nama14' => $this->input->post('nama14') ,
						'jabatan14' => '',
						'lembaga14' => '',
 					);

		

		$this->Kuis_model()->insert_answer($data);
	}

	public function answer_panti()
	{
		$data_panti = array(
			'nama1' => $this->input->post('ketua') , 
			'jabatan1' => 'Ketua CBS',
			'nama2' => $this->input->post('sekre') , 
			'jabatan2' => 'Sekretaris CBS',
			'nama3' => $this->input->post('bendahara') , 
			'jabatan3' => 'Bendahara CBS',
			'nama4' => $this->input->post('kabid1') , 
			'jabatan4' => 'Kabid 1 CBS',
			'nama5' => $this->input->post('humas') , 
			'jabatan5' => 'Kadiv Humas',
			'nama6' => $this->input->post('acara') , 
			'jabatan6' => 'Kadiv Acara',
			'nama7' => $this->input->post('pk') , 
			'jabatan7' => 'Kadiv PK',
			'nama8' => $this->input->post('kabid2') , 
			'jabatan8' => 'Kabid 2 CBS',
			'nama9' => $this->input->post('medik') , 
			'jabatan9' => 'Kadiv Medik',
			'nama10' => $this->input->post('akad') , 
			'jabatan10' => 'Kadiv Akademik',
			'nama11' => $this->input->post('komdis') , 
			'jabatan11' => 'Kadiv Komdis',
			'nama12' => $this->input->post('rohani') , 
			'jabatan12' => 'Kadiv Rohani',
			'nama13' => $this->input->post('kabid3') , 
			'jabatan13' => 'Kabid 3 CBS',
			'nama14' => $this->input->post('logistik') , 
			'jabatan14' => 'Kadiv Logistik',
			'nama15' => $this->input->post('dankom') , 
			'jabatan15' => 'Kadiv Dankom',
			'nama16' => $this->input->post('pubdok') , 
			'jabatan16' => 'Kadiv Pubdok',
			);

		echo "<pre>";
		var_dump($this->input->post());
		echo "</pre>";
		die();

		$this->Kuis_model()->insert_panti($data_panti);
	}

	public function answer_dpa()
	{
		$data_dpa = array(	'nama1' => $this->input->post('kdpa') ,
						'jabatan1' => '',
						'lembaga1' => '',
						'nama2' => $this->input->post('sdpa') ,
						'jabatan2' => '',
						'lembaga2' => '',
						'nama3' => $this->input->post('bdpa') ,
						'jabatan3' => '',
						'lembaga3' => '',
						'nama4' => $this->input->post('k1dpa') ,
						'jabatan4' => '',
						'lembaga4' => '',
						'nama5' => $this->input->post('k2dpa') ,
						'jabatan5' => '',
						'lembaga5' => '',
						'nama6' => $this->input->post('k3dpa') ,
						'jabatan6' => '',
						'lembaga6' => '',
 					);
		$this->Kuis_model()->insert_answer($data_dpa);
	}

	public function answer_mubes()
	{
		$data_mubes = array('nama1' => $this->input->post('p1'),
							'jabatan1' => '',
							'lembaga1' => '',
							'nama2' => $this->input->post('p2') ,
							'jabatan2' => '',
							'lembaga2' => '',
							'nama3' => $this->input->post('p3') ,
							'jabatan3' => '',
							'lembaga3' => '',
 					);
		$this->Kuis_model()->insert_answer($data_mubes);
	}
}	

 ?>