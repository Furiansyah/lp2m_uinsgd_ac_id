<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct()
    {


        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('iniantibacklooh'); 
		$this->load->model('Daftar_kelompok');
        $this->load->model('Daftar_peserta_kkm');

		 backButtonHandle();
		$this->load->helper(array('url','html','form'));

	}
	
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Beranda - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('admin/bg_home',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
	
	
	
	
	
	
	public function info()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Info Kampus - Sistem Informasi Akademik Online";
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$page=$this->uri->segment(3);
			$limit=5;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$bc['info'] = $this->web_app_model->getAllDataLimited('tbl_info',$offset,$limit);
			$tot_hal =  $this->web_app_model->getAllData('tbl_info');
			$config['base_url'] = base_url() . 'admin/info/';
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
			$this->load->view('admin/bg_info',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function edit_info()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$bc['info'] = $this->web_app_model->getSelectedData('tbl_info','kd_info',$this->uri->segment(3));
			$this->load->view('admin/bg_edit_info',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function tambah_info()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$this->load->view('admin/bg_tambah_info');
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function hapus_info()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$id = $this->uri->segment(3);
			$hapus = array('kd_info' => $id);
			$this->web_app_model->deleteData('tbl_info',$hapus);
			header('location:'.base_url().'admin/info');
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function simpan_info()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$st = $this->input->post("stts");
			
			$simpan["judul"] = $this->input->post("judul");
			$simpan["isi"] = $this->input->post("isi");
			
			if($st=="edit")
			{
				$kd_info = $this->input->post('kd_info');
				$where = array('kd_info'=>$kd_info);
				$this->web_app_model->updateDataMultiField("tbl_info",$simpan,$where);
				header('location:'.base_url().'web');
				?>
					<script>
				
					</script>
				<?php
			}
			else if($st=="tambah")
			{
				$simpan["waktu_post"] = strtotime(date('Y-m-d H:i:s'));
				$this->web_app_model->insertData('tbl_info',$simpan);
					header('location:'.base_url().'web');
				?>
			
				<?php
			}
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
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Info Kampus - Sistem Informasi Akademik Online";
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('admin/bg_akun',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$username = $this->session->userdata('username');
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
					header('location:'.base_url().'admin/akun');
					
				}
				else
				{
					$this->session->set_flashdata("save_akun","
					<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
					Password Tidak Sama</p>");
					header('location:'.base_url().'admin/akun');
				}
			}
			else
			{
				$this->session->set_flashdata("save_akun","
				<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
				Password Lama Salah</p>");
				header('location:'.base_url().'admin/akun');
			}
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
	public function penelitian_dan_Penerbitan()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Daftar Dosen - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
		
			$bc['dosen'] = $this->web_app_model->getAllData('tbl_kelompok');
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('admin/bg_penelitian_dan_Penerbitan',$bc);
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
				        $this->load->model('daftar_kelompok');

		if(!empty($cek) && $stts=='admin')
		{
		
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/cek_daftar_kelompok/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin/cek_daftar_kelompok/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin/cek_daftar_kelompok/index.html';
            $config['first_url'] = base_url() . 'admin/cek_daftar_kelompok/index.html';
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
        $this->load->view('admin/daftar_kelompok', $data);
   }
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	 public function read($id) 
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
        $row = $this->Daftar_kelompok->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kelompok' => $row->id_kelompok,
		'nidn' => $row->nidn,
		'dpl' => $row->dpl,
		'lokasi' => $row->lokasi,
		'jumlah' => $row->jumlah,
	    );
            $this->load->view('admin/tbl_kelompok_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/cek_daftar_kelompok/'));
        }
     }
		else
		{
			header('location:'.base_url().'web');
		}
	}
	

    public function create() 
    {
     	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');

		if(!empty($cek) && $stts=='admin')
		{
   $data = array(
            'button' => 'Create',
            'action' => site_url('admin/create_action'),
	    'id_kelompok' => set_value('id_kelompok'),
	    'nidn' => set_value('nidn'),
	    'dpl' => set_value('dpl'),
	    'lokasi' => set_value('lokasi'),
	    'jumlah' => set_value('jumlah'),
	);
        $this->load->view('admin/tbl_kelompok_form', $data);
    }
		else	{			header('location:'.base_url().'web');
		}
	}
	
    public function create_action() 
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nidn' => $this->input->post('nidn',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
	    );

            $this->Daftar_kelompok->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin'));
        }
     }
		else
		{
			header('location:'.base_url().'web');
		}
	}
    
    public function update($id) 
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
        $row = $this->Daftar_kelompok->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/update_action'),
		'id_kelompok' => set_value('id_kelompok', $row->id_kelompok),
		'nidn' => set_value('nidn', $row->nidn),
		'dpl' => set_value('dpl', $row->dpl),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'jumlah' => set_value('jumlah', $row->jumlah),
	    );
            $this->load->view('admin/tbl_kelompok_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/cek_daftar_kelompok/'));
        }
     }
		else
		{
			header('location:'.base_url().'web');
		}
	}
    
    public function update_action() 
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kelompok', TRUE));
        } else {
            $data = array(
		'nidn' => $this->input->post('nidn',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
	    );

            $this->Daftar_kelompok->update($this->input->post('id_kelompok', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/cek_daftar_kelompok/'));
        }
      }
		else
		{
			header('location:'.base_url().'web');
		}
	}
    
    public function delete($id) 
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
        $row = $this->Daftar_kelompok->get_by_id($id);

        if ($row) {
            $this->Daftar_kelompok->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/cek_daftar_kelompok/'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/cek_daftar_kelompok/'));
        }
    }
		else
		{
			header('location:'.base_url().'web');
		}
	}

    public function _rules() 
    {
	$this->form_validation->set_rules('nidn', 'nidn', 'trim|required');
	$this->form_validation->set_rules('dpl', 'dpl', 'trim|required');
	$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

	$this->form_validation->set_rules('id_kelompok', 'id_kelompok', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "Daftar_DPL.xls";
        $judul = "Daftar_DPL";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "NIDN");
	xlsWriteLabel($tablehead, $kolomhead++, "DPL");
	xlsWriteLabel($tablehead, $kolomhead++, "Lokasi");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah");

	foreach ($this->Daftar_kelompok->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nidn);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dpl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lokasi);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }
	
	
	
		public function pengabdian_masyarakat()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Daftar Dosen - Sistem Informasi Akademik Online";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
		
			$bc['dosen'] = $this->web_app_model->getAllData('tbl_kelompok');
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('admin/bg_pengabdian_masyarakat',$bc);
			$this->load->view('global/bg_footer',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	  public function daftar_peserta_kkm()
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/daftar_peserta_kkm/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'admin/daftar_peserta_kkm/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'admin/daftar_peserta_kkm/index.html';
            $config['first_url'] = base_url() . 'admin/daftar_peserta_kkm/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Daftar_peserta_kkm->total_rows($q);
        $daftar_peserta_kkm = $this->Daftar_peserta_kkm->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'daftar_peserta_kkm_data' => $daftar_peserta_kkm,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		
        $this->load->view('admin/tbl_daftar_kkm_list', $data);
  	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	 public function create_peserta() 
	 
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
	        $this->load->model('daftar_peserta_kkm');

        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/create_action_peserta'),
	    'nama' => set_value('nama'),
	    'nim' => set_value('nim'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'tempat_tanggal_lahir' => set_value('tempat_tanggal_lahir'),
	    'fakultas' => set_value('fakultas'),
	    'jurusan' => set_value('jurusan'),
	    'semester' => set_value('semester'),
	    'alamat_asal' => set_value('alamat_asal'),
	    'alamat_sekarang' => set_value('alamat_sekarang'),
	    'no_telp' => set_value('no_telp'),
	    'keterangan_khusus' => set_value('keterangan_khusus'),
	    'persyaratan' => set_value('persyaratan'),
	    'foto' => set_value('foto'),
	    'id_kelompok' => set_value('id_kelompok'),
	    'dpl' => set_value('dpl'),
	    'surat_keterangan_kuliah' => set_value('surat_keterangan_kuliah'),
	    'bukti_lunas_spp' => set_value('bukti_lunas_spp'),
	    'formulir_pendaftaran' => set_value('formulir_pendaftaran'),
	);
        $this->load->view('admin/tbl_daftar_kkm_form', $data);
   	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
    
    public function create_action_peserta() 
    {
	    	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
		    $this->load->model('daftar_peserta_kkm');

        $this->_rules_peserta();

        if ($this->form_validation->run() == FALSE) {
            $this->create_peserta();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_tanggal_lahir' => $this->input->post('tempat_tanggal_lahir',TRUE),
		'fakultas' => $this->input->post('fakultas',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'alamat_asal' => $this->input->post('alamat_asal',TRUE),
		'alamat_sekarang' => $this->input->post('alamat_sekarang',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'keterangan_khusus' => $this->input->post('keterangan_khusus',TRUE),
		'persyaratan' => $this->input->post('persyaratan',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
		'surat_keterangan_kuliah' => $this->input->post('surat_keterangan_kuliah',TRUE),
		'bukti_lunas_spp' => $this->input->post('bukti_lunas_spp',TRUE),
		'formulir_pendaftaran' => $this->input->post('formulir_pendaftaran',TRUE),
	    );

            $this->daftar_peserta_kkm->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/daftar_peserta_kkm'));
        }
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	  public function read_peserta($id) 
    {
        	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
		$row = $this->Daftar_peserta_kkm->get_by_id($id);
        if ($row) {
            $data = array(
		'nama' => $row->nama,
		'nim' => $row->nim,
		'jenis_kelamin' => $row->jenis_kelamin,
		'tempat_tanggal_lahir' => $row->tempat_tanggal_lahir,
		'fakultas' => $row->fakultas,
		'jurusan' => $row->jurusan,
		'semester' => $row->semester,
		'alamat_asal' => $row->alamat_asal,
		'alamat_sekarang' => $row->alamat_sekarang,
		'no_telp' => $row->no_telp,
		'keterangan_khusus' => $row->keterangan_khusus,
		'persyaratan' => $row->persyaratan,
		'foto' => $row->foto,
		'id_kelompok' => $row->id_kelompok,
		'dpl' => $row->dpl,
		'surat_keterangan_kuliah' => $row->surat_keterangan_kuliah,
		'bukti_lunas_spp' => $row->bukti_lunas_spp,
		'formulir_pendaftaran' => $row->formulir_pendaftaran,
	    );
            $this->load->view('admin/tbl_daftar_kkm_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/daftar_peserta_kkm'));
        }
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}


    public function update_peserta($id) 
    {
        	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		$row = $this->Daftar_peserta_kkm->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/update_action_peserta'),
		'nama' => set_value('nama', $row->nama),
		'nim' => set_value('nim', $row->nim),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'tempat_tanggal_lahir' => set_value('tempat_tanggal_lahir', $row->tempat_tanggal_lahir),
		'fakultas' => set_value('fakultas', $row->fakultas),
		'jurusan' => set_value('jurusan', $row->jurusan),
		'semester' => set_value('semester', $row->semester),
		'alamat_asal' => set_value('alamat_asal', $row->alamat_asal),
		'alamat_sekarang' => set_value('alamat_sekarang', $row->alamat_sekarang),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'keterangan_khusus' => set_value('keterangan_khusus', $row->keterangan_khusus),
		'persyaratan' => set_value('persyaratan', $row->persyaratan),
		'foto' => set_value('foto', $row->foto),
		'id_kelompok' => set_value('id_kelompok', $row->id_kelompok),
		'dpl' => set_value('dpl', $row->dpl),
		'surat_keterangan_kuliah' => set_value('surat_keterangan_kuliah', $row->surat_keterangan_kuliah),
		'bukti_lunas_spp' => set_value('bukti_lunas_spp', $row->bukti_lunas_spp),
		'formulir_pendaftaran' => set_value('formulir_pendaftaran', $row->formulir_pendaftaran),
	    );
            $this->load->view('admin/tbl_daftar_kkm_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/daftar_peserta_kkm'));
        }
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
    public function update_action_peserta() 
    {
        	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
		$this->_rules_peserta();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('nim', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'tempat_tanggal_lahir' => $this->input->post('tempat_tanggal_lahir',TRUE),
		'fakultas' => $this->input->post('fakultas',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'alamat_asal' => $this->input->post('alamat_asal',TRUE),
		'alamat_sekarang' => $this->input->post('alamat_sekarang',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'keterangan_khusus' => $this->input->post('keterangan_khusus',TRUE),
		'persyaratan' => $this->input->post('persyaratan',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
		'surat_keterangan_kuliah' => $this->input->post('surat_keterangan_kuliah',TRUE),
		'bukti_lunas_spp' => $this->input->post('bukti_lunas_spp',TRUE),
		'formulir_pendaftaran' => $this->input->post('formulir_pendaftaran',TRUE),
	    );

            $this->Daftar_peserta_kkm->update($this->input->post('nim', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/daftar_peserta_kkm'));
        }
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
    
    public function delete_peserta($id) 
    {	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
        $row = $this->Daftar_peserta_kkm->get_by_id($id);

        if ($row) {
            $this->Daftar_peserta_kkm->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/daftar_peserta_kkm'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/daftar_peserta_kkm'));
        }
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
    public function _rules_peserta() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('tempat_tanggal_lahir', 'tempat tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('fakultas', 'fakultas', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('alamat_asal', 'alamat asal', 'trim|required');
	$this->form_validation->set_rules('alamat_sekarang', 'alamat sekarang', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('keterangan_khusus', 'keterangan khusus', 'trim|required');
	$this->form_validation->set_rules('persyaratan', 'persyaratan', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('id_kelompok', 'id kelompok', 'trim|required');
	$this->form_validation->set_rules('dpl', 'dpl', 'trim|required');
	$this->form_validation->set_rules('surat_keterangan_kuliah', 'surat keterangan kuliah', 'trim|required');
	$this->form_validation->set_rules('bukti_lunas_spp', 'bukti lunas spp', 'trim|required');
	$this->form_validation->set_rules('formulir_pendaftaran', 'formulir pendaftaran', 'trim|required');

	$this->form_validation->set_rules('nim', 'nim', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel_peserta()
    {
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		
        $this->load->helper('exportexcel');
        $namaFile = "tbl_daftar_kkm.xls";
        $judul = "tbl_daftar_kkm";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
	xlsWriteLabel($tablehead, $kolomhead++, "Tempat Tanggal Lahir");
	xlsWriteLabel($tablehead, $kolomhead++, "Fakultas");
	xlsWriteLabel($tablehead, $kolomhead++, "Jurusan");
	xlsWriteLabel($tablehead, $kolomhead++, "Semester");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Sekarang");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telp");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan Khusus");
	xlsWriteLabel($tablehead, $kolomhead++, "Persyaratan");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Kelompok");
	xlsWriteLabel($tablehead, $kolomhead++, "Dpl");
	xlsWriteLabel($tablehead, $kolomhead++, "Surat Keterangan Kuliah");
	xlsWriteLabel($tablehead, $kolomhead++, "Bukti Lunas Spp");
	xlsWriteLabel($tablehead, $kolomhead++, "Formulir Pendaftaran");

	foreach ($this->Daftar_peserta_kkm->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tempat_tanggal_lahir);
	    xlsWriteLabel($tablebody, $kolombody++, $data->fakultas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jurusan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->semester);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_asal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_sekarang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_telp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan_khusus);
	    xlsWriteLabel($tablebody, $kolombody++, $data->persyaratan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_kelompok);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dpl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->surat_keterangan_kuliah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bukti_lunas_spp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->formulir_pendaftaran);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
    public function word_peserta()
    {
        	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
		header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=Daftar_Peserta_KKM_2016.doc");

        $data = array(
            'daftar_peserta_kkm_data' => $this->Daftar_peserta_kkm->get_all(),
            'start' => 0
        );
        
        $this->load->view('admin/tbl_daftar_kkm_doc',$data);
    	}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */