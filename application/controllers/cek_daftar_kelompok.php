<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cek_daftar_kelompok extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('daftar_kelompok');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'Cek_daftar_kelompok/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'Cek_daftar_kelompok/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'Cek_daftar_kelompok/index.html';
            $config['first_url'] = base_url() . 'Cek_daftar_kelompok/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->daftar_kelompok->total_rows($q);
		
        $tbl_kelompok = $this->daftar_kelompok->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_kelompok_data' => $tbl_kelompok,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('mahasiswa/daftar_kelompok', $data);
    }

    public function read($id) 
    {
        $row = $this->daftar_kelompok->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kelompok' => $row->id_kelompok,
		'nidn' => $row->nidn,
		'dpl' => $row->dpl,
		'lokasi' => $row->lokasi,
		'jumlah' => $row->jumlah,
	    );
            $this->load->view('tbl_kelompok_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/dosen'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_kelompok/create_action'),
	    'id_kelompok' => set_value('id_kelompok'),
	    'nidn' => set_value('nidn'),
	    'dpl' => set_value('dpl'),
	    'lokasi' => set_value('lokasi'),
	    'jumlah' => set_value('jumlah'),
	);
        $this->load->view('tbl_kelompok_form', $data);
    }
    
    public function create_action() 
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

            $this->daftar_kelompok->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_kelompok'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->daftar_kelompok->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_kelompok/update_action'),
		'id_kelompok' => set_value('id_kelompok', $row->id_kelompok),
		'nidn' => set_value('nidn', $row->nidn),
		'dpl' => set_value('dpl', $row->dpl),
		'lokasi' => set_value('lokasi', $row->lokasi),
		'jumlah' => set_value('jumlah', $row->jumlah),
	    );
            $this->load->view('tbl_kelompok_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/dosen'));
        }
    }
    
    public function update_action() 
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

            $this->daftar_kelompok->update($this->input->post('id_kelompok', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/dosen'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->daftar_kelompok->get_by_id($id);

        if ($row) {
            $this->daftar_kelompok->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/dosen'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/dosen'));
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

}

/* End of file Tbl_kelompok.php */
/* Location: ./application/controllers/Tbl_kelompok.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2015-12-30 23:21:32 */
/* http://harviacode.com */