<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manajemen extends CI_Controller {

function __construct () {

parent::__construct () ;
$this->load->model('admin/berita_model');
$this->load->helper('text');
$this->load->helper('url');
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
		
		$query = $this->berita_model->daftar_berita();
$data=array('title'=>'Manajemen Berita',
					'berita' => $query,
				
						);		
			$this->load->view('adminweb/header',$datauser);
  		$this->load->view('adminweb/manajemen',$data,$data1,$datauser);
		
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
		$pagination['base_url'] = base_url().'adminweb/index/page/';
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
		
		$this->load->view('adminweb/header');
		$this->load->view('adminweb/hasil_cari',$data,$data1,$datauser);
		$this->load->view('adminweb/footer');
 }
  
  
  
  function read($slug){
   		$datauser['username'] = $this->session->userdata('username');
		$data['ringkasan'] = $this->berita->read($slug);
		$this->load->view('adminweb/header');
		$this->load->view('adminweb/berita_view',$data,$datauser);
  		$this->load->view('adminweb/footer');


}
public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
  
  
  	
	// Controler tambah berita di sini
	public function tambah() {

	
	
	$this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
	$this->form_validation->set_rules('isi', 'Isi berita', 'required');
	if ($this->form_validation->run() === FALSE) {
	
		$datauser['username'] = $this->session->userdata('username');

		$this->load->view('adminweb/header');	
		$this->load->view('adminweb/berita/tambah_berita',$datauser);	
		$this->load->view('adminweb/footer');	
	}else{
		$slug = url_title($this->input->post('judul'), 'dash', TRUE);
		$data = array(
					'judul' 	=> $this->input->post('judul'),
					'id_kategori' 	=> $this->input->post('id_kategori'),
					'slug'		=> $slug,
					'ringkasan'	=> $this->input->post('ringkasan'),
					'isi' 		=> $this->input->post('isi'),
					'status_berita'	=> $this->input->post('status_berita'),
					'id_user'	=> $this->input->post('id_user')
				);
		$this->berita_model->tambah($data);
		redirect(base_url().'adminweb/manajemen/');
	}
	}
	
	// Menampilkan halaman edit
	public function edit($id) {	
	 		$datauser['username'] = $this->session->userdata('username');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('isi', 'Isi berita', 'required');
		if ($this->form_validation->run() === FALSE) {
		$data['berita'] = $this->berita_model->detail_berita();
		$data['detail']	= $this->berita_model->detail_berita($id);
		$data=array('title'		=> 'Mengubah berita: '.$data['detail']['judul'],
					'berita'	=> $this->berita_model->detail_berita(),
					'detail' 	=> $this->berita_model->detail_berita($id),
					'isi'  		=>'adminweb/manajemen/edit_berita'
						);
		
		$this->load->view('adminweb/header',$datauser);	
		$this->load->view('adminweb/berita/edit_berita',$data);	
		$this->load->view('adminweb/footer');	
		// Kalau tidak ada error berita diupdate
		}else{
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			$data = array(
					'id_berita'	=> $this->input->post('id_berita'),
					'judul' 	=> $this->input->post('judul'),
					'id_kategori' 	=> $this->input->post('id_kategori'),
					'slug'		=> $slug,
					'ringkasan'	=> $this->input->post('ringkasan'),
					'isi' 		=> $this->input->post('isi'),
					'status_berita'	=> $this->input->post('status_berita'),
					'id_user'	=> $this->input->post('id_user')
				);
			$this->berita_model->edit_berita($data);
			redirect(base_url().'adminweb/manajemen/');
		}
	}
	
	// Menghapus berita
	public function delete($id) {
		$this->berita_model->delete_berita($id);
		redirect(base_url().'adminweb/manajemen/');
	}
}

?>