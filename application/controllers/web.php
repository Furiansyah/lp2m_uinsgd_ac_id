<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	public function _construct()
	{
		session_start();
	}
	
	public function index()
	{
	
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			$d['judul'] = "Login - Sistem Informasi Pendaftaran KKM";
			
			//buat atribut form
			$frm['username'] = array('name' => 'username',
				'id' => 'username',
				'type' => 'text',
				'value' => '',
				'class' => 'input-teks-login',
				'placeholder' => 'Masukkan username.....'
			);
			$frm['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => '',
				'class' => 'input-teks-login',
				'placeholder' => 'Masukkan password.....'
			);
			
			$this->load->view('web/bg_login',$frm);
		}
		else
		{
			$st = $this->session->userdata('stts');
			if($st=='mahasiswa')
			{
				header('location:'.base_url().'mahasiswa');
			}
			else if($st=='dosen')
			{
				header('location:'.base_url().'dosen');
			}
			else if($st=='admin')
			{
				header('location:'.base_url().'admin');
			}
			
		
		}
		
	}
	
	public function login()
	{
		$d['judul'] = "Login - Sistem Informasi Manajemen Penelitian dan PKM";
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->web_app_model->getLoginData($u,$p);
	}
	
	public function logout()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'web', 'refresh');
		}
		else
		{
			$this->session->sess_destroy();
			header('location:'.base_url().'web', 'refresh');
		}
	}
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */