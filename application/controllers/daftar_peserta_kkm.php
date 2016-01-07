<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daftar_peserta_kkm extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_peserta_kkm');
        $this->load->library('form_validation');
				$this->load->helper(array('url','html','form'));

    }

   

    public function read($id) 
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
            $this->load->view('tbl_daftar_kkm_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('daftar_peserta_kkm'));
        }
    }

    public function create() 
    {
	        $this->load->model('daftar_peserta_kkm');

        $data = array(
            'button' => 'Create',
            'action' => site_url('daftar_peserta_kkm/create_action'),
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
    
    public function create_action() 
    {
	        $this->load->model('daftar_peserta_kkm');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
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
            redirect(site_url('daftar_peserta_kkm'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Daftar_peserta_kkm->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('daftar_peserta_kkm/update_action'),
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
            $this->load->view('tbl_daftar_kkm_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('daftar_peserta_kkm'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

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
            redirect(site_url('daftar_peserta_kkm'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Daftar_peserta_kkm->get_by_id($id);

        if ($row) {
            $this->Daftar_peserta_kkm->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('daftar_peserta_kkm'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('daftar_peserta_kkm'));
        }
    }

    public function _rules() 
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

    public function excel()
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

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_daftar_kkm.doc");

        $data = array(
            'tbl_daftar_kkm_data' => $this->Daftar_peserta_kkm->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_daftar_kkm_doc',$data);
    }

}

/* End of file Daftar_peserta_kkm.php */
/* Location: ./application/controllers/Daftar_peserta_kkm.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-01-07 06:37:16 */
/* http://harviacode.com */