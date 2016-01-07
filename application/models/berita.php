<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Model {

function __construct () {
parent::__construct () ;

}
public function post_list(){
$this->db->order_by('id_berita', 'desc');
$query = $this->db->get('berita' ,'4');
if ($query->num_rows() > 0) {
 return $query->result_array();
 }


}
function post_list_berita(){

$query=$this->db->query("SELECT * FROM berita order by id_berita DESC limit 4");
 return $query->result_array();

}

function post_list_pengumuman($read = FALSE){
if ($read === FALSE) {
$query=$this->db->query("SELECT * FROM berita where id_kategori=3 ORDER BY tanggal DESC");
 return $query->result_array();
 }
 $query = $this->db->get_where('berita', array('slug' => $read));
 return $query->row_array();

}
function post_list_volunteer($read = FALSE){
if ($read === FALSE) {
$query=$this->db->query("SELECT * FROM berita where id_kategori=4 ORDER BY tanggal DESC");
 return $query->result_array();
 }
 $query = $this->db->get_where('berita', array('slug' => $read));
 return $query->row_array();

}
function post_list_galeri($read = FALSE){
if ($read === FALSE) {
$query=$this->db->query("SELECT * FROM berita where id_kategori=2 ORDER BY tanggal DESC");
 return $query->result_array();
 }
 $query = $this->db->get_where('berita', array('slug' => $read));
 return $query->row_array();

}


function read($slug){

$this->db->where('slug', $slug);

$query = $this->db->get('berita');

return $query->result_array();

}



}

?>
