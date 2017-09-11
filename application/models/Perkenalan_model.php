<?php 

/**
* 
*/
class Perkenalan_model extends CI_Model {

	public function aihihi() {
		$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin'")->result()[0]->max;

		echo "<pre>";
		var_dump($max_angkatan);
		echo "</pre>";

		die();

		return $max_angkatan;
	}
	
	public function request_keluarga($data) {
		$id_keluarga = $data['id_keluarga'];
		/*$query = $this->db
			->select('*')
			->from('users')
			->where(array('id_user' => $id_keluarga, ''))
			->limit(1)
			->get();*/
		$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin'")->result()[0]->max;
		$query = $this->db->query("SELECT * FROM users WHERE id_user = '$id_keluarga' AND role != $max_angkatan");

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {

			/*echo "<pre>";
			var_dump($query);
			echo "</pre>";
			die();*/

			$input = array(
				'id_user_maba' => $this->session->userdata['logged_in']['id_user'],
				'id_user_kating' => $data['id_keluarga'],
				'nama' => $data['nama'],
				'ciri_khas' => $data['ciri_khas'],
				'link_foto' => $data['link_foto'],
				'request_time' => $data['request_time'],
				'status' => 0,
			);

			if ($this->db->insert('perkenalan_kating', $input)) {
				return TRUE;
			}else {
				return FALSE;
			}
		}
	}

	public function request_angkatan($data) {
		$id_user2 = $data['id_user2'];
		
		$max_angkatan = $this->db->query("SELECT MAX(role) as 'max' FROM users WHERE role != 'admin'")->result()[0]->max;
		$query = $this->db->query("SELECT * FROM users WHERE id_user = '$id_user2' AND role = $max_angkatan");

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {

			$data['id_user1'] = $this->session->userdata['logged_in']['id_user'];

			if ($this->db->insert('perkenalan_angkatan', $data)) {
				return TRUE;
			}else {
				return FALSE;
			}
		}
	}

	public function getPendingRequest($id_user) {
		$q = $this->db->query("SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS 'npm_keluarga', p.nama, p.ciri_khas, p.link_foto, p.request_time, (SELECT u.role FROM users u WHERE u.id_user = p.id_user_kating) AS 'angkatan_keluarga', (SELECT prof.nama FROM profile_maba prof WHERE prof.id_user = p.id_user_maba) AS 'nama_peserta' FROM users u, perkenalan_kating p WHERE p.id_user_maba = '$id_user' AND status = 0 GROUP BY p.id_perkenalan_kating");
		
		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}
	}

	public function getAcceptedRequest($id_user) {
		$q = $this->db->query("SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS 'npm_keluarga', p.nama, p.ciri_khas, p.link_foto, p.request_time, (SELECT u.role FROM users u WHERE u.id_user = p.id_user_kating) AS 'angkatan_keluarga', (SELECT prof.nama FROM profile_maba prof WHERE prof.id_user = p.id_user_maba) AS 'nama_peserta' FROM users u, perkenalan_kating p WHERE p.id_user_maba = '$id_user' AND status = 1 GROUP BY p.id_perkenalan_kating");
		
		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}
	}

	public function check_perkenalan($id_user_maba, $id_user, $tabel) {

		if ($tabel == 'perkenalan_kating') {
			$q = $this->db
			->select('*')
			->from($tabel)
			->where(array('id_user_maba' => $id_user_maba, 'id_user_kating' => $id_user, 'status' => 1))
			->limit(1)
			->get();
		}else {
			$q = $this->db
			->select('*')
			->from($tabel)
			->where(array('id_user1' => $id_user_maba, 'id_user2' => $id_user))
			->limit(1)
			->get();
		}

		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return TRUE;
		}
	}

	public function get_pp() {
		$q = $this->db
			->select('link_foto')
			->get('profile_maba');

		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result();
		}
	}

	public function get_perkenalan_angkatan($id_perkenalan)
	{
		$q = $this->db
			->get_where('perkenalan_angkatan', array('id_user1' => $this->session->userdata['logged_in']['id_user'], 'id_perkenalan_angkatan' => $id_perkenalan));

		return $q->result();
	}

	public function edit_perkenalan_angkatan($id_perkenalan, $input)
	{
		$q = $this->db->where(array(
				'id_perkenalan_angkatan' => $id_perkenalan,
				'id_user1' => $this->session->userdata['logged_in']['id_user']
		))->update('perkenalan_angkatan', $input);

		return $q;

	}

	public function getDeclinedRequest($id_user) {
		$q = $this->db->query("SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS 'npm_keluarga', p.nama, p.ciri_khas, p.link_foto, p.request_time, (SELECT u.role FROM users u WHERE u.id_user = p.id_user_kating) AS 'angkatan_keluarga', (SELECT prof.nama FROM profile_maba prof WHERE prof.id_user = p.id_user_maba) AS 'nama_peserta', p.message FROM users u, perkenalan_kating p WHERE p.id_user_maba = '$id_user' AND status = 2 GROUP BY p.id_perkenalan_kating");

		
		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}
	}

}

 ?>