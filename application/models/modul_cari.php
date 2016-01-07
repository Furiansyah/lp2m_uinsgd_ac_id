<?php

class Modul_cari extends CI_Model {

	// Model users
	function ambildata($perPage, $uri, $ringkasan) {
		$this->db->select('*');
		$this->db->from('berita');
		if (!empty($ringkasan)) {
			$this->db->like('judul', $ringkasan);
		}
		$this->db->order_by('id_berita','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}

}

?>