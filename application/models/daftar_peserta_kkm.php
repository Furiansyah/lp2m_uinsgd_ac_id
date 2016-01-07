<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daftar_peserta_kkm extends CI_Model
{

    public $table = 'tbl_daftar_kkm';
    public $id = 'nim';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('nim', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_tanggal_lahir', $q);
	$this->db->or_like('fakultas', $q);
	$this->db->or_like('jurusan', $q);
	$this->db->or_like('semester', $q);
	$this->db->or_like('alamat_asal', $q);
	$this->db->or_like('alamat_sekarang', $q);
	$this->db->or_like('no_telp', $q);
	$this->db->or_like('keterangan_khusus', $q);
	$this->db->or_like('persyaratan', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('id_kelompok', $q);
	$this->db->or_like('dpl', $q);
	$this->db->or_like('surat_keterangan_kuliah', $q);
	$this->db->or_like('bukti_lunas_spp', $q);
	$this->db->or_like('formulir_pendaftaran', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('nim', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_tanggal_lahir', $q);
	$this->db->or_like('fakultas', $q);
	$this->db->or_like('jurusan', $q);
	$this->db->or_like('semester', $q);
	$this->db->or_like('alamat_asal', $q);
	$this->db->or_like('alamat_sekarang', $q);
	$this->db->or_like('no_telp', $q);
	$this->db->or_like('keterangan_khusus', $q);
	$this->db->or_like('persyaratan', $q);
	$this->db->or_like('foto', $q);
	$this->db->or_like('id_kelompok', $q);
	$this->db->or_like('dpl', $q);
	$this->db->or_like('surat_keterangan_kuliah', $q);
	$this->db->or_like('bukti_lunas_spp', $q);
	$this->db->or_like('formulir_pendaftaran', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
