<?php 
	class M_login extends CI_Model {

		public function cekLogin($nik, $password) {
			$this->db->select('*');
			$this->db->from('akun');
			$this->db->where('nik', $nik);
			$this->db->where('password', $password);
			return $this->db->get()->row();
		}

		public function cekAkun() {

		}
	}
?>