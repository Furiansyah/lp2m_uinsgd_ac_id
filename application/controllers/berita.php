<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

function __construct () {

parent::__construct () ;
$this->load->model('manajemen');
$this->load->helper('text');
$this->load->helper('url');
}

 public function index()
 {
  $data['ringkasan'] = $this->berita->post_list();
  $this->load->view('main/header',$data);
    $this->load->view('profil',$data);
  $this->load->view('main/footer',$data);
   }
  
}