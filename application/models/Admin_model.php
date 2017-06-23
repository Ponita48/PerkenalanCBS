<?php 

/**
* 
*/
class Admin_model extends CI_Model {
	
	public function getPerkenalanKeluarga() {
		$q = $this->db->query("SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS 'npm_keluarga', p.nama, p.ciri_khas, p.link_foto, p.request_time FROM users u, perkenalan_kating p WHERE status = 0 GROUP BY p.id_perkenalan_kating");

		echo "<pre>";
		var_dump($q->result());
		echo "</pre>";
		die();

	}

}

 ?>


<!-- 
SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS "npm_peserta", (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS "npm_keluarga", p.nama, p.ciri_khas, p.link_foto, p.request_time FROM users u, perkenalan_kating p WHERE status = 0 GROUP BY p.id_perkenalan_kating -->