<?php 

/**
* 
*/
class User_model extends CI_Model {

	public function aihihi() {
		$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin' AND role != 'warga'")->result()[0]->max;

		echo "<pre>";
		var_dump($max_angkatan);
		echo "</pre>";

		die();

		return $max_angkatan;
	}

	public function max_angkatan() {
		$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin' AND role != 'warga'")->result()[0]->max;
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

				$max_angkatan = $this->max_angkatan();

				if ($query->row('role') == $max_angkatan) {
					$role = 'peserta';
				}elseif ($query->row('role') == 'admin') {
					$role = 'admin';
				}else {
					$role = 'warga';
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

				$max_angkatan = $this->max_angkatan();

				if ($query->row('role') == $max_angkatan) {
					$role = 'peserta';
				}elseif ($query->row('role') == 'admin') {
					$role = 'admin';
				}else {
					$role = 'warga';
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

		$id_user = $data['id_user'];

		$query = $this->db
			->select('*')
			->from('users')
			->where("id_user = '$id_user'")
			->limit(1)
			->get();

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {	
			$this->db
				->where('id_user', $id_user)
				->update('users', array(
							'email' => $data['email'], 
							'password' => $data['password']
						)
					);

			return TRUE;
		}
	}

	public function assign_photo($file_name, $id_user) {
		$q = $this->db
			->select('*')
			->from('profile_maba')
			->where('id_user', $id_user)
			->get();

		if ($q->num_rows() != 0) {
			$q = $this->db
				->where('id_user', $id_user)
				->update('profile_maba', array(
							'link_foto' => $file_name
						)
					);
			return $q;
		}else {
			$q = $this->db
				->insert('profile_maba', array('id_user' => $id_user, 'link_foto' => $file_name));

			return $q;
		}
	}

	public function getProfile($id = NULL) {
		
		if ($id == NULL) {
			if ($this->session->userdata['logged_in']['role'] == 'peserta') {
				$sel = "u.id_user, u.npm, u.email, u.role, p.nama, p.jk, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.no_hp, p.id_line, p.motto_hidup, p.link_foto";
				$fr = "users u";
				$j = "profile_maba p";
			}else {
				$sel = "u.id_user, u.npm, u.email, u.role, p.nama, p.jk, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.no_hp, p.id_line, p.link_foto";
				$fr = "users u";
				$j = "profile_kating p";
			}
			$id = $this->session->userdata['logged_in']['id_user'];
			/*$q = "SELECT ".$sel." FROM ".$fr." WHERE p.id_user = ".$this->session->userdata['logged_in']['id_user'];*/
		}else {

			$role = $this->db->select('*')
				->from('users')
				->where("id_user = '$id' AND role != 'admin'")
				->limit(1)
				->get();
			
			if ($role->num_rows() == 0) {
				return FALSE;
			}else {
				$role = $role->result()[0]->role;
			}
			
			if ($role == $this->max_angkatan()) {
				$sel = "u.id_user, u.npm, u.email, u.role, p.nama, p.jk, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.no_hp, p.id_line, p.motto_hidup, p.link_foto";
				$fr = "users u";
				$j = "profile_maba p";
			}elseif($role != $this->max_angkatan() && $role != 'admin') {
				$sel = "u.id_user, u.npm, u.email, u.role, p.nama, p.jk, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.no_hp, p.id_line, p.link_foto";
				$fr = "users u";
				$j = "profile_kating p";
			}else {
				return FALSE;
			}
		}
			$q = "SELECT ".$sel." FROM ".$fr." LEFT JOIN ".$j." ON u.id_user = p.id_user WHERE u.id_user = '$id'";

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
			->where("id_user = '$id_user'")
			->limit(1)
			->get();

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {
			$q = $this->db->where('id_user', $id_user)->update('users', $data1);

			if ($q == FALSE) {
				echo "di sini";
				return $q;
			}else {

				$query = $this->db
					->select('*')
					->from('profile_maba')
					->where("id_user = '$id_user'")
					->limit(1)
					->get();

				if ($query->num_rows() == 0) {
					$data2['id_user'] = $id_user;
					$q = $this->db->insert('profile_maba', $data2);				
				}else {
					if ($this->session->userdata['logged_in']['role'] == 'peserta') {
						$q = $this->db->where('id_user', $id_user)->update('profile_maba', $data2);
					}else {
						$q = $this->db->where('id_user', $id_user)->update('profile_kating', $data2);
					}
				}
				return $q;
			}

		}

	}

	public function search($keySearch) {

		$max_angkatan = $this->max_angkatan();

		$query1 = $this->db->query("SELECT users.id_user, users.npm, profile_kating.nama, profile_kating.link_foto FROM users LEFT JOIN profile_kating ON users.id_user = profile_kating.id_user WHERE users.role != $max_angkatan AND users.role != 'admin' AND (users.npm LIKE '$keySearch' OR profile_kating.nama LIKE '$keySearch') GROUP BY id_user LIMIT 5");

		/*SELECT users.npm, profile_kating.nama FROM users LEFT JOIN profile_kating ON users.id_user = profile_kating.id_user WHERE (users.npm LIKE '$keySearch' OR profile_kating.nama LIKE '$keySearch')*/

		$query2 = $this->db->query("SELECT users.id_user, users.npm, profile_maba.nama, profile_maba.link_foto FROM users LEFT JOIN profile_maba ON users.id_user = profile_maba.id_user WHERE users.role = $max_angkatan AND users.role != 'admin' AND (users.npm LIKE '$keySearch' OR profile_maba.nama LIKE '$keySearch') GROUP BY id_user LIMIT 5");

		if ($query1->num_rows() == 0 && $query2->num_rows() == 0) {
			return FALSE;
		}else {

			$result = array_merge($query1->result_array(), $query2->result_array());


			return $result;
		}

	}

	public function get_angkatan($angkatan) {

		if ($angkatan == "all") {
			/*$q = $this->db
				->select('*')
				->from('users')
				->where("role != '2017' AND role != 'admin'")
				->get();*/

			$q = $this->db->query("SELECT u.id_user, u.npm, p.nama, p.link_foto, u.role FROM users u LEFT JOIN profile_kating p ON u.id_user = p.id_user WHERE u.role != '2017' AND u.role != 'admin'");

		}elseif($angkatan == "2017") {
			$q = $this->db->query("SELECT u.id_user, u.npm, p.nama, p.link_foto, u.role FROM users u LEFT JOIN profile_maba p ON u.id_user = p.id_user WHERE u.role = '2017'");
			
		}else {
			/*$q = $this->db
				->select('*')
				->from('users')
				->where('role',$angkatan)
				->get();*/

			$q = $this->db->query("SELECT u.id_user, u.npm, p.nama, p.link_foto, u.role FROM users u LEFT JOIN profile_kating p ON u.id_user = p.id_user WHERE u.role = '$angkatan'");
		}

		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}
	}

	public function get_npm($id_user) {
		$q = $this->db
			->select('npm')
			->from('users')
			->where('id_user', $id_user)
			->limit(1)
			->get();

		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result()[0]->npm;
		}
	}

	public function get_role($id_user) {
		$q = $this->db
			->select('role')
			->from('users')
			->where('id_user', $id_user)
			->limit(1)
			->get();

		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result()[0]->role;
		}
	}

	public function cek_email($npm, $ket) {

		if ($ket == "npm") {
			$q = $this->db
				->select('email')
				->from('users')
				->where('npm', $npm)
				->limit(1)
				->get();
		}else {
			$q = $this->db
				->select('email')
				->from('users')
				->where('id_user', $npm)
				->limit(1)
				->get();
		}


		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result()[0]->email;
		}	
	}

	public function cek_role($npm) {
		$q = $this->db
			->select('role')
			->from('users')
			->where('npm', $npm)
			->limit(1)
			->get();

		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result()[0]->role;
		}	
	}

}

 ?>