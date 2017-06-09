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
		$query = $this->db
			->select('*')
			->from('users')
			->where('id_user = $id_keluarga')
			->limit(1)
			->get();

		if ($query->num_rows() == 0) {
			return FALSE;
		}else {
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

}

 ?>