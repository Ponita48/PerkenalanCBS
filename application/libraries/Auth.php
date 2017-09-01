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
			return array('result' => FALSE, 'code' => 'login', 'message' => 'Please Log In first!');
		}else {
			if ($this->CI->User_model->cek_email($this->CI->session->userdata['logged_in']['id_user'], "id_user") == NULL) {
				return array('result' => FALSE, 'code' => 'new_login', 'message' => 'Please fill this form first!');
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
				return array('result' => FALSE, 'code' => 'home', 'message' => 'Forbidden content, participants only!');
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
				return array('result' => FALSE, 'code' => 'home', 'message' => 'Forbidden content, Admin only!');
			}
		}	
	}

	public function cek_pernah_login()
	{
		if ( ! isset($this->CI->session->userdata['logged_in'])) {
			//$this->login("Harap login terlebih dahulu");
			return array('result' => FALSE, 'code' => 'login', 'message' => 'Please Log In first!');
		}else {
			if ($this->CI->User_model->cek_email($this->CI->session->userdata['logged_in']['id_user'], "id_user") != NULL) {
				return array('result' => FALSE, 'code' => 'new_login', 'message' => 'Form has successfully filled!');
			}
		}

		return array('result' => TRUE);
	}
}