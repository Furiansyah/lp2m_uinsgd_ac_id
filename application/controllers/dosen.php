<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {
function __construct () {

parent::__construct () ;
$this->load->model('proposal_model');
$this->load->helper('text');
$this->load->helper('url');
$this->load->library('upload'); 

}
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='dosen')
		{
			$d['judul'] = "Beranda - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['kd_dosen'] = $this->session->userdata('kd_dosen');
			$bc['menu'] = $this->load->view('dosen/menu', '', true);
			$bc['bio'] = $this->load->view('dosen/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('dosen/bg_home',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function daftar_proposal()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='dosen')
		{
			$d['judul'] = "Persetujuan KRS - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['kd_dosen'] = $this->session->userdata('kd_dosen');
			$bc['menu'] = $this->load->view('dosen/menu', '', true);
			$bc['bio'] = $this->load->view('dosen/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('dosen/bg_dosen_daftar_proposal',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	public function daftar_proposal_penelitian()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='dosen')
		{
			$d['judul'] = "Persetujuan KRS - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['kd_dosen'] = $this->session->userdata('kd_dosen');
			$bc['menu'] = $this->load->view('dosen/menu', '', true);
			$bc['bio'] = $this->load->view('dosen/bio', $bc, true);
			

			$this->load->view('global/bg_top',$d);
			$this->load->view('dosen/bg_dosen_daftar_proposal_penelitian',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
public function proposal()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='dosen')
		{
			$d['judul'] = "Persetujuan KRS - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['kd_dosen'] = $this->session->userdata('kd_dosen');
			$bc['menu'] = $this->load->view('dosen/menu', '', true);
			$bc['bio'] = $this->load->view('dosen/bio', $bc, true);
			
			$data['proposal'] = $this->proposal_model->show('daftar_proposal_penelitian');

			$this->load->view('global/bg_top',$bc);
			$this->load->view('dosen/bg_dosen_proposal',$data);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
		public function daftar_pembimbing_lapangan()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='dosen')
		{
			$d['judul'] = "Persetujuan KRS - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['kd_dosen'] = $this->session->userdata('kd_dosen');
			$bc['menu'] = $this->load->view('dosen/menu', '', true);
			$bc['bio'] = $this->load->view('dosen/bio', $bc, true);
			

			$this->load->view('global/bg_top',$d);
			$this->load->view('dosen/bg_dosen_daftar_pembimbing_lapangan',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
	
	
	
	
	
 public function do_upload(){
   if($this->input->post('submit')){
             $config['upload_path']    = "./assets/proposal/";
             $config['allowed_types']  = '*';
             $config['max_size']       = '*';
             $config['max_width']      = '20000';
             $config['max_height']     = '20000';
             $config['file_name']      = url_title($this->input->post('proposal'));
			
			 $config['judul']     = $this->input->post('judul');
             $config['nama_lengkap']     = $this->input->post('nama_lengkap');
			 $config['jenis_proposal']     = $this->input->post('jenis_proposal');
			 $config['jabatan']     = $this->input->post('jabatan');
			 $config['lokasi_penelitian']     = $this->input->post('lokasi_penelitian');
			 $config['waktu_penelitian']     = $this->input->post('waktu_penelitian');
			 $config['biaya']     = $this->input->post('biaya');

		     $this->load->library('upload', $config);
			 
         $this->upload->initialize($config); //meng set config yang sudah di atur
 if( !$this->upload->do_upload('proposal'))
 {
 
 echo $this->upload->display_errors();
 }
 else{
 $data = array(
	'judul' 	=> $this->input->post('judul'),
	'nama_lengkap' 	=> $this->input->post('nama_lengkap'),
	'jenis_proposal' 	=> $this->input->post('jenis_proposal'),
	'jabatan' 	=> $this->input->post('jabatan'),
	'lokasi_penelitian' 	=> $this->input->post('lokasi_penelitian'),
	'waktu_penelitian' 	=> $this->input->post('waktu_penelitian'),
	'biaya' 	=> $this->input->post('biaya'),

 'file'=>$this->upload->file_name);

 $this->proposal_model->insert($data,'daftar_proposal_penelitian');
 
 redirect('dosen/proposal');
 }
 
 }
}


public function simpan_dpl(){
$this->load->model('dpl_model');

   $data = array(
	'nidn' 	=> $this->input->post('nidn'),
	'dpl' 	=> $this->input->post('dpl'),
	'lokasi' 	=> $this->input->post('lokasi'),
	'jumlah' 	=> $this->input->post('jumlah')
		);
  		$this->dpl_model->insert($data);
        redirect('dosen');

		}
	
	public function akun()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='dosen')
		{
			$d['judul'] = "Info Kampus - Sistem Informasi Akademik Online";
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['kd_dosen'] = $this->session->userdata('kd_dosen');
			$bc['menu'] = $this->load->view('dosen/menu', '', true);
			$bc['bio'] = $this->load->view('dosen/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('dosen/bg_akun',$bc);
			$this->load->view('global/bg_footer',$d);
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
		if(!empty($cek) && $stts=='dosen')
		{
			$username = $this->session->userdata('kd_dosen');
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
					header('location:'.base_url().'dosen/akun');
				}
				else
				{
					$this->session->set_flashdata("save_akun","
					<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
					Password Tidak Sama</p>");
					header('location:'.base_url().'dosen/akun');
				}
			}
			else
			{
				$this->session->set_flashdata("save_akun","
				<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
				Password Lama Salah</p>");
				header('location:'.base_url().'dosen/akun');
			}
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
}

/* End of file dosen.php */
/* Location: ./application/controllers/dosen.php */