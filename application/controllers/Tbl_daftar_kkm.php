<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_daftar_kkm extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_daftar_kkm_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_daftar_kkm/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_daftar_kkm/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_daftar_kkm/index.html';
            $config['first_url'] = base_url() . 'tbl_daftar_kkm/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_daftar_kkm_model->total_rows($q);
        $tbl_daftar_kkm = $this->Tbl_daftar_kkm_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_daftar_kkm_data' => $tbl_daftar_kkm,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_daftar_kkm_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_daftar_kkm_model->get_by_id($id);
        if ($row) {
            $data = array(
		'nama' => $row->nama,
		'jurusan' => $row->jurusan,
		'fakultas' => $row->fakultas,
		'id_kelompok' => $row->id_kelompok,
		'dpl' => $row->dpl,
		'nim' => $row->nim,
	    );
            $this->load->view('tbl_daftar_kkm_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_daftar_kkm'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_daftar_kkm/create_action'),
	    'nama' => set_value('nama'),
	    'jurusan' => set_value('jurusan'),
	    'fakultas' => set_value('fakultas'),
	    'id_kelompok' => set_value('id_kelompok'),
	    'dpl' => set_value('dpl'),
	    'nim' => set_value('nim'),
	);
        $this->load->view('tbl_daftar_kkm_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'nim' => $this->input->post('nim',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'fakultas' => $this->input->post('fakultas',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
	    );

            $this->Tbl_daftar_kkm_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(base_url('mahasiswa/khs'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_daftar_kkm_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_daftar_kkm/update_action'),
		'nama' => set_value('nama', $row->nama),
		'jurusan' => set_value('jurusan', $row->jurusan),
		'fakultas' => set_value('fakultas', $row->fakultas),
		'id_kelompok' => set_value('id_kelompok', $row->id_kelompok),
		'dpl' => set_value('dpl', $row->dpl),
		'nim' => set_value('nim', $row->nim),
	    );
            $this->load->view('tbl_daftar_kkm_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_daftar_kkm'));
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
		'jurusan' => $this->input->post('jurusan',TRUE),
		'fakultas' => $this->input->post('fakultas',TRUE),
		'id_kelompok' => $this->input->post('id_kelompok',TRUE),
		'dpl' => $this->input->post('dpl',TRUE),
	    );

            $this->Tbl_daftar_kkm_model->update($this->input->post('nim', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_daftar_kkm'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_daftar_kkm_model->get_by_id($id);

        if ($row) {
            $this->Tbl_daftar_kkm_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_daftar_kkm'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_daftar_kkm'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('fakultas', 'fakultas', 'trim|required');
	$this->form_validation->set_rules('id_kelompok', 'id kelompok', 'trim|required');
	$this->form_validation->set_rules('dpl', 'dpl', 'trim|required');

	$this->form_validation->set_rules('nim', 'nim', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_daftar_kkm.php */
/* Location: ./application/controllers/Tbl_daftar_kkm.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2015-12-30 23:59:17 */
/* http://harviacode.com */