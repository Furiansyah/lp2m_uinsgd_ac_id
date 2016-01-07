<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halberita extends CI_Controller {

function __construct () {

parent::__construct () ;
$this->load->model('berita');
$this->load->helper('text');
$this->load->helper('url');

}

 public function index()
 {

 
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
		$pagination['base_url'] = base_url().'home/index/page/';
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
		$this->load->view('main/header');
  		$this->load->view('halberita',$data,$data1);
 		$this->load->view('main/footer');
 }
 
  
   public function hasil_cari()
 {

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
		$pagination['base_url'] = base_url().'main/index/page/';
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
		
		$this->load->view('main/header');
		$this->load->view('main/hasil_cari',$data,$data1);
		$this->load->view('main/footer');
 }
  
  
  
  function read($slug){
		$data['ringkasan'] = $this->berita->read($slug);
		$this->load->view('main/header');
		$this->load->view('main/berita_view',$data);
  		$this->load->view('main/footer');


}
public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
  
}

?>