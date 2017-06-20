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
		$query = $this->db->query("SELECT * FROM users WHERE id_user = $id_keluarga AND role != $max_angkatan");

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
		$query = $this->db->query("SELECT * FROM users WHERE id_user = $id_user2 AND role = $max_angkatan");

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

	

}

 ?>