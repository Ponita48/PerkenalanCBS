<?php 

/**
* 
*/
class User_model extends CI_Model {

	public function aihihi() {
		$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin'")->result()[0]->max;

		echo "<pre>";
		var_dump($max_angkatan);
		echo "</pre>";

		die();

		return $max_angkatan;
	}
	
	public function loginNoHash($data) {
		$condition = "npm= '".$data['npm']."'";
		$query = $this->db
				->select('*')
				->from('users')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 1) {
			$password = $data['password'];
			if ($password == $query->row('password')) {

				$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin'")->result()[0]->max;

				if ($query->row('role') == $max_angkatan) {
					$role = 'maba';
				}elseif ($query->row('role') == 'admin') {
					$role = 'admin';
				}else {
					$role = 'kating';
				}

				$session_data['role'] = $role;
				$this->session->set_userdata('role', $session_data);

				return $query;
			}else {
				return FALSE;
			}
		}else {
			return FALSE;
		}
	}

	public function login($data) {
		$condition = "npm= '".$data['npm']."'";
		$query = $this->db
				->select('*')
				->from('users')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 1) {
			$password = $data['password'];
			if (password_verify($password, $query->row('password'))) {

				$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin'")->result()[0]->max;

				if ($query->row('role') == $max_angkatan) {
					$role = 'maba';
				}elseif ($query->row('role') == 'admin') {
					$role = 'admin';
				}else {
					$role = 'kating';
				}

				$session_data['role'] = $role;
				$this->session->set_userdata('role', $session_data);

				return $query;
			}else {
				return FALSE;
			}
		}else {
			return FALSE;
		}
	}

	public function newLogin() {
		
	}


}

 ?>