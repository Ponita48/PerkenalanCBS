<?php 

/**
* 
*/
class Admin_model extends CI_Model {
	
	public function getPerkenalanKeluarga() {
		$q = $this->db->query("SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS 'npm_keluarga', p.nama, p.ciri_khas, p.link_foto, p.request_time, (SELECT u.role FROM users u WHERE u.id_user = p.id_user_kating) AS 'angkatan_keluarga', (SELECT prof.nama FROM profile_maba prof WHERE prof.id_user = p.id_user_maba) AS 'nama_peserta' FROM users u, perkenalan_kating p WHERE status = 0 GROUP BY p.id_perkenalan_kating");
		
		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}
	}

	public function getPerkenalanAngkatan($id) {
		$q = $this->db->query("SELECT p.id_perkenalan_angkatan, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user1) AS 'npm_peserta', (SELECT u.npm FROM users u WHERE u.id_user = p.id_user2) AS 'npm_angkatan', p.nama, p.tempat_lahir, p.tgl_lahir, p.alamat_kos, p.id_line, p.no_hp, p.link_foto, p.request_time FROM users u, perkenalan_angkatan p WHERE p.id_user1 = '$id' AND p.id_perkenalan_angkatan IN (SELECT MAX(p.id_perkenalan_angkatan) FROM perkenalan_angkatan p WHERE p.request_time = (SELECT MAX(p.request_time) FROM perkenalan_angkatan x WHERE x.id_user1 = p.id_user1 AND x.id_user2 = p.id_user2) GROUP BY p.id_user1, p.id_user2)  GROUP BY p.id_perkenalan_angkatan ORDER BY (SELECT u.npm FROM users u WHERE u.id_user = p.id_user2)");

		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}

	}

	public function getJumlahPerkenalan() {
		$q = $this->db->query("SELECT (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT COUNT(*) FROM perkenalan_kating p WHERE p.id_user_maba = u.id_user  AND p.id_perkenalan_kating IN (SELECT MAX(p.id_perkenalan_kating) FROM  perkenalan_kating p WHERE p.status = 1 GROUP BY p.id_user_maba, p.id_user_kating)) AS 'jumlah' FROM perkenalan_kating p, users u WHERE p.id_user_maba = u.id_user AND p.status = 1 GROUP BY u.npm");

		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			return $q->result();
		}
	}

	public function approveRejectPerkenalan($id_perkenalan, $data) {
		$q = $this->db
			->select('*')
			->from('perkenalan_kating')
			->where('id_perkenalan_kating', $id_perkenalan)
			->limit(1)
			->get();

		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			$result = $this->db
				->where('id_perkenalan_kating', $id_perkenalan)
				->update('perkenalan_kating', $data);

			return $result;
		}
	}

	public function getDetailPerkenalan($id_perkenalan) {
		$q = $this->db
			->select('*')
			->from('perkenalan_kating')
			->where('id_perkenalan_kating', $id_perkenalan)
			->limit(1)
			->get();

		if ($q->num_rows() == 0) {
			return FALSE;
		}else {
			$res = $q->result()[0];
			$peserta = $this->db->query("SELECT link_foto FROM profile_maba WHERE id_user = '$res->id_user_maba'");
			$kating = $this->db->query("SELECT npm FROM users WHERE id_user = '$res->id_user_kating'");
			$pp_kating = $this->db->query("SELECT link_foto FROM profile_kating WHERE id_user = '$res->id_user_kating'");
			
			if ($peserta->num_rows() == 0) {
				$res->link_foto_peserta = NULL;
			}else {
				$res->link_foto_peserta = $peserta->result()[0]->link_foto;
			}

			if ($kating->num_rows() == 0) {
				$res->npm_keluarga = NULL;
			}else {
				$res->npm_keluarga = $kating->result()[0]->npm;
			}

			if ($kating->num_rows() == 0) {
				$res->pp_keluarga = NULL;
			}else {
				$res->pp_keluarga = $pp_kating->result()[0]->link_foto;
			}
			
			return $res;

		}
	}

}

 ?>


<!-- 
SELECT p.id_perkenalan_kating, (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS "npm_peserta", (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_kating) AS "npm_keluarga", p.nama, p.ciri_khas, p.link_foto, p.request_time FROM users u, perkenalan_kating p WHERE status = 0 GROUP BY p.id_perkenalan_kating -->


<!-- SELECT (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT COUNT(*) FROM perkenalan_kating p WHERE p.id_user_maba = u.id_user) AS 'jumlah' FROM perkenalan_kating p, users u WHERE p.id_user_maba = u.id_user GROUP BY (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) -->

<!-- SELECT (SELECT u.npm FROM users u WHERE u.id_user = p.id_user_maba) AS 'npm_peserta', (SELECT COUNT(*) FROM perkenalan_kating p WHERE p.id_user_maba = u.id_user) AS 'jumlah' FROM perkenalan_kating p, users u WHERE p.id_user_maba = u.id_user GROUP BY u.npm -->