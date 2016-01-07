<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Model {

function __construct () {
$this->load->database();
parent::__construct () ;

}

}
function post_list($read = FALSE){
if ($read === FALSE) {
$query=$this->db->query("SELECT * FROM berita ORDER BY tanggal DESC");
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
