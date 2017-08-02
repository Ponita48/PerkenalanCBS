<?php 

/**
* 				
*/			
class Kuis_model extends CI_Model
{

	public function insert_panitia($npm_maba, $nama, $jabatan, $link_foto, $status = 0) {
		$q = $this->db
			->select('*')
			->from('kuis_panitia')
			->where(array('npm_maba' => $npm_maba, 'jabatan' => $jabatan))
			->limit(1)
			->get();

		$data = array(
			'npm_maba' => $npm_maba,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'link_foto' => $link_foto,
			'status' => $status
		);

		if ($q->num_rows() == 0) {
			$this->db->insert('kuis_panitia', $data);
		}else {
			$this->db
				->where('npm_maba', $npm_maba)
				->update('kuis_panitia', $data);
		}

	}

	public function insert_bk($npm_maba, $nama, $jabatan, $lembaga, $link_foto, $status = 0) {
		$q = $this->db
			->select('*')
			->from('kuis_bk')
			->where(array('npm_maba' => $npm_maba, 'jabatan' => $jabatan, 'lembaga' => $lembaga))
			->limit(1)
			->get();

		$data = array(
			'npm_maba' => $npm_maba,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'lembaga' => $lembaga,
			'link_foto' => $link_foto,
			'status' => $status
		);

		if ($q->num_rows() == 0) {
			$this->db->insert('kuis_bk', $data);
		}else {
			$this->db
				->where('npm_maba', $npm_maba)
				->update('kuis_bk', $data);
		}

	}

	public function get_kuis_panitia($npm_maba) {
		$q = $this->db
			->select('*')
			->from('kuis_panitia')
			->where('npm_maba', $npm_maba)
			->get();

		if ($q->num_rows() == 0) {
			return NULL;
		}else {

			foreach ($q->result() as $value) {
				$data[$value->jabatan] = $value;
			}

			return $data;
		}

	}

	public function get_kuis_bk($npm_maba, $lembaga) {
		$q = $this->db
			->select('*')
			->from('kuis_bk')
			->where(array('npm_maba' => $npm_maba, 'lembaga' => $lembaga))
			->get();

		if ($q->num_rows() == 0) {
			return NULL;
		}else {

			foreach ($q->result() as $value) {
				$data[$value->jabatan] = $value;
			}

			return $data;
		}

	}

	public function get_filled_kuis() {
		$q = $this->db->query("SELECT users.id_user, users.npm, profile_maba.nama from users JOIN kuis_bk on users.npm = kuis_bk.npm_maba JOIN kuis_panitia ON users.npm = kuis_panitia.npm_maba LEFT JOIN profile_maba ON users.id_user = profile_maba.id_user GROUP BY users.id_user");

		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result();
		}
	}

	public function cek_filled_kuis($npm) {
		$q = $this->db->query("SELECT users.id_user, users.npm, profile_maba.nama from users JOIN kuis_bk on users.npm = kuis_bk.npm_maba JOIN kuis_panitia ON users.npm = kuis_panitia.npm_maba LEFT JOIN profile_maba ON users.id_user = profile_maba.id_user WHERE users.npm = '$npm' GROUP BY users.id_user");

		if ($q->num_rows() == 0) {
			return NULL;
		}else {
			return $q->result();
		}
	}
}

 ?>