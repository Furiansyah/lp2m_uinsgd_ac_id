<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    function __construct()
    {

        parent::__construct();
        $this->load->model('Daftar_kkm_model');
		$this->load->model(array('web_app_model'));
        $this->load->library('form_validation');
		$this->load->helper('iniantibacklooh'); 
		        $this->load->model('daftar_kelompok');

		 backButtonHandle();
    	$this->load->library('upload');
		$this->load->helper(array('url','html','form'));

	}

	
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		
		if(!empty($cek) && $stts=='mahasiswa')
		{
			$d['judul'] = "Beranda - Sistem Informasi Pendaftaran Kuliah Kerja Mahasiswa";			
			
			$bc['no'] = $this->session->userdata('no');
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['nim'] = $this->session->userdata('nim');
			$bc['menu'] = $this->load->view('mahasiswa/menu', '', true);
			$bc['bio'] = $this->load->view('mahasiswa/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('mahasiswa/bg_home',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function kkm()
	{

		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
	if(!empty($cek) && $stts=='mahasiswa')
		{
		$data = array(
            'button' => 'Create',
            'action' => site_url('mahasiswa/daftar_kkm'),
	    'no_daftar' => set_value('no_daftar'),
	   
		 'jenis_kelamin' => set_value('jenis_kelamin'),
	    'tempat_tanggal_lahir' => set_value('tempat_tanggal_lahir'),
	    'semester' => set_value('semester'),
	    'alamat_asal' => set_value('alamat_asal'),
	    'alamat_sekarang' => set_value('alamat_sekarang'),
	    'no_telp' => set_value('no_telp'),
		
	    'keterangan_khusus' => set_value('keterangan_khusus'),
	    'photo_2x3' => set_value('photo_2x3'),
	    'id_kelompok' => set_value('id_kelompok'),
	    'dpl' => set_value('dpl'),
	);
		
	
			$d['judul'] = "Formulir Pendaftaran - Sistem Informasi Pendaftaran Kuliah Kerja Mahasiswa";
			$bc['no'] = $this->session->userdata('no');
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['nim'] = $this->session->userdata('nim');
			$bc['jurusan'] = $this->session->userdata('jurusan');
			$bc['fakultas'] = $this->session->userdata('fakultas');
			$bc['id_kelompok'] = $this->session->userdata('id_kelompok');
			$bc['dpl'] = $this->session->userdata('dpl');
			$bc['semester'] = $this->session->userdata('semester');

			$bc['kkma'] = $this->web_app_model->getmauDaftarkkm($bc['nim']);
		
			$bc['cek'] = $this->web_app_model->cek_kelompok($bc['id_kelompok']);


			$bc['menu'] = $this->load->view('mahasiswa/menu', '', true);
			$bc['bio'] = $this->load->view('mahasiswa/bio', $bc, true);
			

					
			$this->load->view('global/bg_top',$bc);
			$this->load->view('mahasiswa/bg_jadwal',$data,$bc);
			$this->load->view('global/bg_footer',$d);
		}
		 
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
    
		public function daftar_kkm()
	{
			   
if ($this->form_validation->run() == FALSE) {
 $this->kkm();  
 }

else {
		 $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_tanggal_lahir' => $this->input->post('tempat_tanggal_lahir',TRUE),
		'fakultas' => $this->input->post('fakultas',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'alamat_asal' => $this->input->post('alamat_asal',TRUE),
		'alamat_sekarang' => $this->input->post('alamat_sekarang',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'keterangan_khusus' => $this->input->post('keterangan_khusus',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
		   

	    );
		     
   
            $this->Daftar_kkm_model->insert($data);
			$this->session->set_flashdata('message', 'Berhasil daftar');
			redirect(site_url('mahasiswa'));
     	}
	
		}
		
		

 
	
	 function do_upload(){

	$cek = $this->session->userdata('logged_in');
	$stts = $this->session->userdata('stts');

	if(!empty($cek) && $stts=='mahasiswa')
		{
    if($this->input->post('submit')){
            $config['upload_path']    = './assets/dokumen-persyaratan/';
            $config['allowed_types']  = 'gif|jpg|png|bmp|jpeg';
   		    $config['max_size'] = '*';
		 	$config['max_width'] = '*';
			$config['max_height'] = '*';


	     $config['nama'] = $this->input->post('nama');
		 $config['nim'] = $this->input->post('nim');
		 $config['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		 $config['tempat_tanggal_lahir'] = $this->input->post('tempat_tanggal_lahir');
		 $config['fakultas'] = $this->input->post('fakultas');
		 $config['jurusan'] = $this->input->post('jurusan');
		 $config['semester'] = $this->input->post('semester');
		 $config['alamat_asal'] = $this->input->post('alamat_asal');
		 $config['alamat_sekarang'] = $this->input->post('alamat_sekarang');
		 $config['no_telp'] = $this->input->post('no_telp');
		 $config['keterangan_khusus'] = $this->input->post('keterangan_khusus');
		 $config['id_kelompok'] = $this->input->post('id_kelompok');
		
		  $this->load->library('upload', $config);
		  $this->upload->initialize($config); //meng set config yang sudah di atur

 $cekdulu= "select * from tbl_daftar_kkm where nim='$_POST[nim]'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
$prosescek= mysql_query($cekdulu);

$cekjumlahkelompok=mysql_query("select * from tbl_kelompok where id_kelompok='$_POST[id_kelompok]'"); //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
while($c=mysql_fetch_array($cekjumlahkelompok)) {
$jumlah = $c['jumlah'] ;}

foreach($_FILES as $field_name => $file) {
if   (!$this->upload->do_upload($field_name)) {
    echo "<script>alert('Pastikan sudah dilampirkan');location.href='../mahasiswa/kkm' </script>";
}
else if (mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    echo "<script>alert('Username Sudah Digunakan');location.href='../mahasiswa/kkm'</script>";
}

else if ($jumlah<=0) { //proses mengingatkan data sudah ada
    echo "<script>alert('Kuota kelompok sudah penuh');location.href='../mahasiswa/kkm' </script>";
}

 else if (empty($_POST['tempat_tanggal_lahir'])){
    echo "<script>alert('Pastikan data sudah terisi');location.href='../mahasiswa/kkm'</script>";
 }
  else if (empty($_POST['no_telp'])){
    echo "<script>alert('Pastikan data sudah terisi');location.href='../mahasiswa/kkm'</script>";
}


 else {
$userfile0 = $this->upload->data();
$userfile1 = $this->upload->data();
$userfile2 = $this->upload->data();

$userfile[] = $userfile0['file_name'];
$userfile1[] = $userfile1['file_name'];
$userfile2[] = $userfile2['file_name'];

}



 }
	$hasil = $this->web_app_model->update_image($userfile,$userfile,$userfile);

	redirect('mahasiswa/cetak_formulir');


}
 }
   else{header('location:'.base_url().'web');}
 
}
	
	
	
	
	
	
	
	
	
	
	public function cetak_formulir()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		
		
		if(!empty($cek) && $stts=='mahasiswa')
		{
			$d['judul'] = "Cetak Kartu - Sistem Informasi Pendaftaran Kuliah Kerja Mahasiswa";
				
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['nim'] = $this->session->userdata('nim');
			
			
						
			$bc['menu'] = $this->load->view('mahasiswa/menu', '', true);
			$bc['bio'] = $this->load->view('mahasiswa/bio', $bc, true);
			
			$bc['kkm'] = $this->web_app_model->view($bc['nim']);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('mahasiswa/bg_nilai',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		
		
		else
		{header('location:'.base_url().'web');}
	}
	

		
	 public function validasi_formulir(){

	$cek = $this->session->userdata('logged_in');
	$stts = $this->session->userdata('stts');

	if(!empty($cek) && $stts=='mahasiswa')
		{
	$bc['nim'] = $this->session->userdata('nim');

    if($this->input->post('submit')){
            $config['upload_path']    = './assets/formulir-persyaratan/';
            $config['allowed_types']  = '*';
   		    $config['max_size'] = '*';
		 	$config['max_width'] = '*';
			$config['max_height'] = '*';


	  
		
		  $this->load->library('upload', $config);
		  $this->upload->initialize($config); //meng set config yang sudah di atur

foreach($_FILES as $field_name => $file) {
if   (!$this->upload->do_upload($field_name)) {
    echo "<script>alert('Pastikan sudah dilampirkan');history.go(-1) </script>";
}
 else {
$userfile0 = $this->upload->data();

$userfile[] = $userfile0['file_name'];
}

 
 }
$nim=$this->session->userdata('nim');
	$hasil = $this->web_app_model->update_formulir($nim,$userfile);
	redirect('mahasiswa/cetak_formulir');
}

 }
   else{header('location:'.base_url().'web');}
 
}
	
		
		
		
		
		
		
       
		public function simpan_kkm()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		$data = array(
				
		'dpl' => $this->input->post('dpl') ,
				            );
							
            $this->web_app_model->insert($data);
			
            redirect('mahasiswa/khs');
       
        }
		
		
	public function cetak_formulir_pendaftaran_KKM_2016(){
        ob_start();
	$bc['nim'] = $this->session->userdata('nim');
				

	  $data['data'] = $this->Daftar_kkm_model->get_by_nim($bc['nim']);
       
		    
			    $this->load->view('mahasiswa/print',$data);

			
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','F4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Pendaftaran KKM 2016.pdf', 'fr');
    }
		
		
		
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'fakultas' => $this->input->post('fakultas',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
	    );

            $this->Tbl_daftar_kkm_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_daftar_kkm'));
        }
    }
		
		
		
		
		
  public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('nim', 'nim', 'trim|required');
	$this->form_validation->set_rules('tempat_tanggal_lahir', '<br />Tempat Tanggal Lahir', 'trim|required');
	$this->form_validation->set_rules('fakultas', 'fakultas', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('alamat_asal', 'alamat asal', 'trim|required');
	$this->form_validation->set_rules('alamat_sekarang', 'alamat sekarang', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('keterangan_khusus', 'keterangan khusus', 'trim|required');
	$this->form_validation->set_rules('id_kelompok', 'id kelompok', 'trim|required');
	$this->form_validation->set_rules('dpl', 'dpl', 'trim|required');

	$this->form_validation->set_rules('no_daftar', 'no_daftar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

	
	public function info()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='mahasiswa')
		{
			$d['judul'] = "Info Kampus - Sistem Informasi Pendaftaran Kuliah Kerja Mahasiswa";
				
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['nim'] = $this->session->userdata('nim');
			$bc['menu'] = $this->load->view('mahasiswa/menu', '', true);
			$bc['bio'] = $this->load->view('mahasiswa/bio', $bc, true);
			
			$page=$this->uri->segment(3);
			$limit=5;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$bc['info'] = $this->web_app_model->getAllDataLimited('tbl_info',$offset,$limit);
			$tot_hal =  $this->web_app_model->getAllData('tbl_info');
			$config['base_url'] = base_url() . 'mahasiswa/info_kampus/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('mahasiswa/bg_info',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function akun()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='mahasiswa')
		{
			$d['judul'] = "Info Kampus - Sistem Informasi Pendaftaran Kuliah Kerja Mahasiswa";
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['nim'] = $this->session->userdata('nim');
			$bc['menu'] = $this->load->view('mahasiswa/menu', '', true);
			$bc['bio'] = $this->load->view('mahasiswa/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('mahasiswa/bg_akun',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	   public function cek_daftar_kelompok()
    {
	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		
		if(!empty($cek) && $stts=='mahasiswa')
		{
		
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'mahasiswa/cek_daftar_kelompok/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'mahasiswa/cek_daftar_kelompok/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'mahasiswa/cek_daftar_kelompok/index.html';
            $config['first_url'] = base_url() . 'mahasiswa/cek_daftar_kelompok/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->daftar_kelompok->total_rows($q);
		
        $Cek_daftar_kelompok = $this->daftar_kelompok->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_kelompok_data' => $Cek_daftar_kelompok,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('mahasiswa/daftar_kelompok', $data);
   }
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
	
	
	
	
	public function simpan_akun()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='mahasiswa')
		{
			$username = $this->session->userdata('nim');
			$pass_lama = $this->input->post('pass_lama');
			$pass_baru = $this->input->post('pass_baru');
			$ulangi_pass = $this->input->post('ulangi_pass');
			
			$data['username'] = $username;
			$data['password'] = md5($pass_lama);
			$cek = $this->web_app_model->getSelectedDataMultiple('tbl_login',$data);
			if($cek->num_rows()>0)
			{
				if($pass_baru==$ulangi_pass)
				{
					$simpan['password'] = md5($pass_baru);
					$where = array('username'=>$username);
					$this->web_app_model->updateDataMultiField("tbl_login",$simpan,$where);
					$this->session->set_flashdata("save_akun","
					<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
					Berhasil mengubah password</p>");
					header('location:'.base_url().'mahasiswa/akun');
				}
				else
				{
					$this->session->set_flashdata("save_akun","
					<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
					Password Tidak Sama</p>");
					header('location:'.base_url().'mahasiswa/akun');
				}
			}
			else
			{
				$this->session->set_flashdata("save_akun","
				<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
				Password Lama Salah</p>");
				header('location:'.base_url().'mahasiswa/akun');
			}
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */