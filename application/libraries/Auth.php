<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Auth
{
	
	protected $CI;

	function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('User_model');
		$this->CI->load->library(array('session'));
	}

	public function cek_login()
	{
		if ( ! isset($this->CI->session->userdata['logged_in'])) {
			//$this->login("Harap login terlebih dahulu");
			return array('result' => FALSE, 'code' => 'login', 'message' => 'Harap login terlebih dahulu');
		}else {
			if ($this->CI->User_model->cek_email($this->CI->session->userdata['logged_in']['id_user'], "id_user") == NULL) {
				return array('result' => FALSE, 'code' => 'new_login', 'message' => 'Harap mengisi form ini terlebih dahulu');
			}
		}

		return array('result' => TRUE);
	}

	public function cek_login_peserta()
	{
		$result = $this->cek_login();

		if ($result['result'] == FALSE) {
			return $result;
		}else {
			if ($this->CI->session->userdata['logged_in']['role'] == 'peserta') {
				return array('result' => TRUE);
			}else {
				return array('result' => FALSE, 'code' => 'home', 'message' => 'Hanya peserta yang dapat melihat konten ini');
			}
		}
	}

	public function cek_login_admin()
	{
		$result = $this->cek_login();

		if ($result['result'] == FALSE) {
			return $result;
		}else {
			if ($this->CI->session->userdata['logged_in']['role'] == 'admin') {
				return array('result' => TRUE);
			}else {
				return array('result' => FALSE, 'code' => 'home', 'message' => 'Hanya admin yang dapat melihat konten ini');
			}
		}	
	}

	public function cek_pernah_login()
	{
		if ( ! isset($this->CI->session->userdata['logged_in'])) {
			//$this->login("Harap login terlebih dahulu");
			return array('result' => FALSE, 'code' => 'login', 'message' => 'Harap login terlebih dahulu');
		}else {
			if ($this->CI->User_model->cek_email($this->CI->session->userdata['logged_in']['id_user'], "id_user") != NULL) {
				return array('result' => FALSE, 'code' => 'new_login', 'message' => 'Anda telah mengisi form ini');
			}
		}

		return array('result' => TRUE);
	}
}