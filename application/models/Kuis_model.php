<?php 

/**
* 				
*/			
class Kuis_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function insert_be($data)
	{
		$this->db->query("INSERT INTO kuis_bk (npm_maba, nama, jabatan, lembaga) VALUES ($this->session->userdata['logged_in']['npm'],$data['nama1'],$data['jabatan1'],$data['lembaga1']), 
		($this->session->userdata['logged_in']['npm'],$data['nama2'],$data['jabatan2'],$data['lembaga2']), 
		($this->session->userdata['logged_in']['npm'],$data['nama3'],$data['jabatan3'],$data['lembaga3']), 
		($this->session->userdata['logged_in']['npm'],$data['nama4'],$data['jabatan4'],$data['lembaga4']), 
		($this->session->userdata['logged_in']['npm'],$data['nama5'],$data['jabatan5'],$data['lembaga5']), 
		($this->session->userdata['logged_in']['npm'],$data['nama6'],$data['jabatan6'],$data['lembaga6']), 
		($this->session->userdata['logged_in']['npm'],$data['nama7'],$data['jabatan7'],$data['lembaga7']), 
		($this->session->userdata['logged_in']['npm'],$data['nama8'],$data['jabatan8'],$data['lembaga8']), 
		($this->session->userdata['logged_in']['npm'],$data['nama9'],$data['jabatan9'],$data['lembaga9']), 
		($this->session->userdata['logged_in']['npm'],$data['nama10'],$data['jabatan10'],$data['lembaga10']), 
		($this->session->userdata['logged_in']['npm'],$data['nama11'],$data['jabatan11'],$data['lembaga11']), 
		($this->session->userdata['logged_in']['npm'],$data['nama12'],$data['jabatan12'],$data['lembaga12']), 
		($this->session->userdata['logged_in']['npm'],$data['nama13'],$data['jabatan13'],$data['lembaga13']), 
		($this->session->userdata['logged_in']['npm'],$data['nama14'],$data['jabatan14'],$data['lembaga14'])");
	}

	public function insert_panti($data_panti)
	{
		$this->db->query("INSERT INTO kuis_panitia (npm_maba,nama,jabatan) VALUES 
			($this->session->userdata['logged_in']['npm'],$data_panti['nama1'],$data_panti['jabatan1']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama2'],$data_panti['jabatan2']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama3'],$data_panti['jabatan3']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama4'],$data_panti['jabatan4']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama5'],$data_panti['jabatan5']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama6'],$data_panti['jabatan6']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama7'],$data_panti['jabatan7']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama8'],$data_panti['jabatan8']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama9'],$data_panti['jabatan9']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama10'],$data_panti['jabatan10']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama11'],$data_panti['jabatan11']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama12'],$data_panti['jabatan12']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama13'],$data_panti['jabatan13']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama14'],$data_panti['jabatan14']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama15'],$data_panti['jabatan15']),
			($this->session->userdata['logged_in']['npm'],$data_panti['nama16'],$data_panti['jabatan16'])");
	}

	public function insert_dpa($data_dpa)
	{
		$this->db->query("INSERT INTO kuis_bk (npm_maba,nama,jabatan) VALUES 
			($this->session->userdata['logged_in']['npm'],$data_dpa['nama1'],$data_dpa['jabatan1']),
			($this->session->userdata['logged_in']['npm'],$data_dpa['nama2'],$data_dpa['jabatan2']),
			($this->session->userdata['logged_in']['npm'],$data_dpa['nama3'],$data_dpa['jabatan3']),
			($this->session->userdata['logged_in']['npm'],$data_dpa['nama4'],$data_dpa['jabatan4']),
			($this->session->userdata['logged_in']['npm'],$data_dpa['nama5'],$data_dpa['jabatan5']),
			($this->session->userdata['logged_in']['npm'],$data_dpa['nama6'],$data_dpa['jabatan6'])");
	}

	public function insert_mubes($data_mubes)
	{
		$this->db->query("INSERT INTO kuis_bk (npm_maba,nama,jabatan) VALUES 
			($this->session->userdata['logged_in']['npm'],$data_mubes['nama1'],$data_mubes['jabatan1']),
			($this->session->userdata['logged_in']['npm'],$data_mubes['nama2'],$data_mubes['jabatan2']),
			($this->session->userdata['logged_in']['npm'],$data_mubes['nama3'],$data_mubes['jabatan3'])");
	}
}

 ?>