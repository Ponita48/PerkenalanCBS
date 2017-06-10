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
					$role = 'peserta';
				}elseif ($query->row('role') == 'admin') {
					$role = 'admin';
				}else {
					$role = 'keluarga';
				}

				/*$session_data['role'] = $role;
				$session_data['id_user'] = $query->row('id_user');
				$this->session->set_userdata('logged_in', $session_data);*/

				$query->role = $role;

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
					$role = 'perserta';
				}elseif ($query->row('role') == 'admin') {
					$role = 'admin';
				}else {
					$role = 'keluarga';
				}

				/*$session_data['role'] = $role;
				$session_data['id_user'] = $query->row('id_user');
				$this->session->set_userdata('logged_in', $session_data);*/

				$query->role = $role;

				return $query;
			}else {
				return FALSE;
			}
		}else {
			return FALSE;
		}
	}

	public function new_login($data) {

		$npm = $data['npm'];

		$query = $this->db
			->select('*')
			->from('users')
			->where("npm = '$npm'")
			->limit(1)
			->get();

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {	
			$this->db
				->where('npm', $data['npm'])
				->update('users', array(
						'email' => $data['email'], 
						'password' => $data['password'])
					);

			return TRUE;
		}
	}

	public function getProfile() {
		if ($this->session->userdata['logged_in']['role'] == 'peserta') {
			$sel = "u.email, p.nama, p.jk, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.no_hp, p.id_line, p.motto_hidup, p.link_foto";
			$fr = "users u, profile_maba p";
		}else {
			$sel = "u.email, p.nama, p.jk, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.no_hp, p.id_line, p.link_foto";
			$fr = "users u, profile_kating p";
		}
			$q = "SELECT ".$sel." FROM ".$fr."WHERE p.id_user = ".$this->session->userdata['logged_in']['id_user'];
		$query = $this->db->query($q);

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {
			return $query->result();
		}
	}

	public function setProfile($data1, $data2) {


		$id_user = $this->session->userdata['logged_in']['id_user'];

		$query = $this->db
			->select('*')
			->from('users')
			->where("id_user = $id_user")
			->limit(1)
			->get();

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {
			$this->db->where('id_user', $id_user)->update('users', $data1);

			if ($this->session->userdata['logged_in']['role'] == 'peserta') {
				$this->db->where('id_user', $id_user)->update('profile_maba', $data2);
			}else {
				$this->db->where('id_user', $id_user)->update('profile_kating', $data2);
			}
			
			return TRUE;
		}

	}

	public function search($keySearch) {
		$query1 = $this->db->query("SELECT users.npm, profile_kating.nama FROM users, profile_kating WHERE users.id_user = profile_kating.id_user AND (users.npm LIKE '$keySearch' OR profile_kating.nama LIKE '$keySearch'")->result_array();
		$query2 = $this->db->query("SELECT users.npm, profile_maba.nama FROM users, profile_maba WHERE users.id_user = profile_maba.id_user AND (users.npm LIKE '$keySearch' OR profile_maba.nama LIKE '$keySearch'")->result_array();

		$result = array_merge($query1, $query2);

		return $result;
	}



}

 ?>