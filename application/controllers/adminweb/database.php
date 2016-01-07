<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Database extends CI_Controller {

function __construct () {

parent::__construct () ;
$this->load->model('admin/database_model');
$this->load->helper('text');
$this->load->helper(array('url','html','form'));
 $this->load->library('upload'); 
		if ($this->session->userdata('username')=="") {
			redirect('auth');
			}

}

 public function index()
 {
 		$datauser['username'] = $this->session->userdata('username');

 
 if (isset($_POST['q'])) {
			$data1['ringkasan'] = $this->input->post('cari');
			// se session userdata untuk pencarian, untuk paging pencarian
			$this->session->set_userdata('sess_ringkasan', $data1['ringkasan']);
		}
		else {
			$data1['ringkasan'] = $this->session->userdata('sess_ringkasan');
		}


		// load model
		$this->load->model('modul_cari');
		$this->db->like('judul', $data1['ringkasan']);
        $this->db->from('berita');

		// pagination limit
		$pagination['base_url'] = base_url().'admin/index/page/';
		$pagination['total_rows'] = $this->db->count_all_results();
		$pagination['full_tag_open'] = "<p><div class=\"pagination\" style='letter-spacing:2px;'>";
		$pagination['full_tag_close'] = "</div></p>";
		$pagination['cur_tag_open'] = "<span class=\"current\">";
		$pagination['cur_tag_close'] = "</span>";
		$pagination['num_tag_open'] = "<span class=\"disabled\">";
		$pagination['num_tag_close'] = "</span>";
		$pagination['per_page'] = "3";
		$pagination['uri_segment'] = 4;
		$pagination['num_links'] = 5;

		$this->pagination->initialize($pagination);

		$data1['ListBerita'] = $this->modul_cari->ambildata($pagination['per_page'],$this->uri->segment(4,0),$data1['ringkasan']);

		$this->load->vars($data1);
		
			$data['dokumen'] = $this->database_model->show('dokumen');
		
		$this->load->view('adminweb/header',$datauser);
  		$this->load->view('adminweb/database',$data,$data1,$datauser);
 		$this->load->view('adminweb/footer',$datauser);
 }
 
  
   public function hasil_cari()
 {
  		$datauser['username'] = $this->session->userdata('username');

 if (isset($_POST['q'])) {
			$data1['ringkasan'] = $this->input->post('cari');
			// se session userdata untuk pencarian, untuk paging pencarian
			$this->session->set_userdata('sess_ringkasan', $data1['ringkasan']);
		}
		else {
			$data1['ringkasan'] = $this->session->userdata('sess_ringkasan');
		}


		// load model
		$this->load->model('modul_cari');

		$this->db->like('judul', $data1['ringkasan']);
        $this->db->from('berita');

		// pagination limit
		$pagination['base_url'] = base_url().'admin/index/page/';
		$pagination['total_rows'] = $this->db->count_all_results();
		$pagination['full_tag_open'] = "<p><div class=\"pagination\" style='letter-spacing:2px;'>";
		$pagination['full_tag_close'] = "</div></p>";
		$pagination['cur_tag_open'] = "<span class=\"current\">";
		$pagination['cur_tag_close'] = "</span>";
		$pagination['num_tag_open'] = "<span class=\"disabled\">";
		$pagination['num_tag_close'] = "</span>";
		$pagination['per_page'] = "3";
		$pagination['uri_segment'] = 4;
		$pagination['num_links'] = 5;

		$this->pagination->initialize($pagination);

		$data1['ListBerita'] = $this->modul_cari->ambildata($pagination['per_page'],$this->uri->segment(4,0),$data1['ringkasan']);

		$this->load->vars($data1);
		
		$data['ringkasan'] = $this->berita->post_list();
		
		$this->load->view('admin/header');
		$this->load->view('admin/hasil_cari',$data,$data1,$datauser);
		$this->load->view('admin/footer');
 }
  
  
  
  function read($slug){
   		$datauser['username'] = $this->session->userdata('username');
		$data['ringkasan'] = $this->berita->read($slug);
		$this->load->view('admin/header');
		$this->load->view('admin/berita_view',$data,$datauser);
  		$this->load->view('admin/footer');


}
public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
  
  
  	
 public function do_upload(){
   if($this->input->post('submit')){
             $config['upload_path']    = "./assets/download/";
             $config['allowed_types']  = '*';
             $config['max_size']       = '*';
             $config['max_width']      = '20000';
             $config['max_height']     = '20000';
             $config['file_name']      = url_title($this->input->post('dokumen'));
			 $config['nama']     = $this->input->post('nama');
             $this->load->library('upload', $config);
			 
         $this->upload->initialize($config); //meng set config yang sudah di atur
 if( !$this->upload->do_upload('dokumen'))
 {
 
 echo $this->upload->display_errors();
 }
 else{
 $data = array(
	'nama' 	=> $this->input->post('nama'),
 'file'=>$this->upload->file_name);

 $this->database_model->insert($data,'dokumen');
 
 redirect('adminweb/database');
 }
 
 }
 
}
}

?>