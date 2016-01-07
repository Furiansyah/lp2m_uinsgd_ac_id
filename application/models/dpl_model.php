<?php
class Dpl_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}
	
	
	// Menampilkand data berita
public function show($table){
  $this->db->select('*');
  $data = $this->db->get($table);
  if($data->num_rows() > 0){
  return $data->result_array();
 }else{
 return false;
 }
 }
 
 public function insert($data){
 $this->db->insert('tbl_kelompok', $data);
  return;
    }
	
	// Detail berita
	public function detail_daftarkkm($id = FALSE) {
	if ($id === FALSE)	{
		$query = $this->db->get('daftar_kkm');
		return $query->result_array();
	}
	$query = $this->db->get_where('daftar_kkm', array('id_kkm' => $id));
	return $query->row_array();
	}
	
	// Update berita
	public function edit_berita($data) {
		$this->db->where('id_berita', $data['id_berita']);
		return $this->db->update('berita', $data);
	}
	
	// Hapus berita
	public function delete_berita($id) {
		$this->db->where('id',$id);
		return $this->db->delete('dokumen');
	}
}