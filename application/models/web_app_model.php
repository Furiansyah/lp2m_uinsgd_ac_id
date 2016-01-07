<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_App_Model extends CI_Model {

function __construct () {

parent::__construct () ;
}
 
	//query otomatis dengan active record
	
	
	public function getAllData($table)
	{
		return $this->db->get($table);
	}
	
	public function getAllDataLimited($table,$offset,$limit)
	{
		return $this->db->get($table,$limit,$offset);
	}
	
	public function getSelectedData($table,$key,$value)
	{
		$this->db->where($key, $value); 
		return $this->db->get($table);
	}
	
	public function getSelectedDataMultiple($table,$data)
	{
		return $this->db->get_where($table, $data);
	}
	
	function deleteData($table,$data)
	{
		$this->db->delete($table, $data);
	}
	
	function updateData($table,$data,$field,$key)
	{
		$this->db->where($key,$field);
		$this->db->update($table,$data);
	}
	
	function updateDataMultiField($table,$data,$field_key)
	{
		$this->db->update($table,$data,$field_key);
	}
	
	function insertData($table,$data)
	{
		$this->db->insert($table,$data);
	}
	
	
	//query login
	public function getLoginData($usr,$psw)
	{
		$u = mysql_real_escape_string($usr);
		$p = md5(mysql_real_escape_string($psw));
		$q_cek_login = $this->db->get_where('tbl_login', array('username' => $u, 'password' => $p));
		if(count($q_cek_login->result())>0)
		{
			foreach($q_cek_login->result() as $qck)
			{
				if($qck->stts=='mahasiswa')
				{
					$q_ambil_data = $this->db->get_where('tbl_mahasiswa', array('nim' => $u));
					
					foreach($q_ambil_data ->result() as $qad)
					{
						$sess_data['logged_in'] = 'yes';
						$sess_data['no'] = $qad->no;
						$sess_data['nim'] = $qad->nim;
						$sess_data['nama'] = $qad->nama_mahasiswa;
						$sess_data['angkatan'] = $qad->angkatan;
						$sess_data['jurusan'] = $qad->jurusan;
												$sess_data['semester'] = $qad->semester;

						$sess_data['fakultas'] = $qad->fakultas;
						
						$sess_data['stts'] = 'mahasiswa';
						$sess_data['program'] = $qad->kelas_program;
						$this->session->set_userdata($sess_data);
					}
										
					
					header('location:'.base_url().'mahasiswa');
				}
				else if($qck->stts=='dosen')
				{
					$q_ambil_data = $this->db->get_where('tbl_dosen', array('kd_dosen' => $u));
					foreach($q_ambil_data ->result() as $qad)
					{
						$sess_data['logged_in'] = 'yes';
						$sess_data['kd_dosen'] = $qad->kd_dosen;
						$sess_data['nidn'] = $qad->nidn;
						$sess_data['nama'] = $qad->nama_dosen;
						$sess_data['stts'] = 'dosen';
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url().'dosen');
				}
				else if($qck->stts=='admin')
				{
					$q_ambil_data = $this->db->get_where('tbl_admin', array('username' => $u));
					foreach($q_ambil_data ->result() as $qad)
					{
						$sess_data['logged_in'] = 'yes';
						$sess_data['username'] = $qad->username;
						$sess_data['nama'] = $qad->nama_lengkap;
						$sess_data['stts'] = 'admin';
						$this->session->set_userdata($sess_data);
					}
					header('location:'.base_url().'admin');
				}
			}
		}
		
			else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
	public function getDaftarkkm($nim)
	{
			return $this->db->query("SELECT * FROM tbl_daftar_kkm WHERE nim='".$nim."'");  
			
	}
	

public function getmauDaftarkkm($nim)
	{
	return  $this->db->query("SELECT tbl_kelompok.dpl FROM tbl_kelompok, tbl_daftar_kkm WHERE tbl_daftar_kkm.id_kelompok=tbl_kelompok.id_kelompok AND tbl_daftar_kkm.nim= '".$nim."'");
	

	}
	
	public function view($nim){
			return $this->db->query("SELECT * FROM tbl_daftar_kkm WHERE nim='".$nim."'");  
    }

function update_image($userfile,$userfile,$userfile)
{
$url = 'http://localhost/lppm.uinsgd.ac.id/assets/dokumen-persyaratan/';
$data = array(
'surat_keterangan_kuliah'=>$userfile[0],
'bukti_lunas_spp'=>$userfile[1],
'foto'=>$userfile[2],

		'nama' => $this->input->post('nama'),
		'nim' => $this->input->post('nim'),
		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		'tempat_tanggal_lahir' => $this->input->post('tempat_tanggal_lahir'),
		'fakultas' => $this->input->post('fakultas'),
		'jurusan' => $this->input->post('jurusan'),
		'semester' => $this->input->post('semester'),
		'alamat_asal' => $this->input->post('alamat_asal'),
		'alamat_sekarang' => $this->input->post('alamat_sekarang'),
		'no_telp' => $this->input->post('no_telp'),
		'keterangan_khusus' => $this->input->post('keterangan_khusus'),
		'id_kelompok' => $this->input->post('id_kelompok')
);

return $this->db->insert('tbl_daftar_kkm',$data);

}


function update_formulir($nim,$userfile)
{
$url = 'http://localhost/lppm.uinsgd.ac.id/assets/dokumen-persyaratan/';
$data = array(
'formulir_pendaftaran'=>$userfile[0],

);
 		
 $this->db->where('nim',$nim);
$this->db->update('tbl_daftar_kkm',$data);

}



	public function cek_kelompok()
	{
	return $this->db->query("SELECT * FROM tbl_kelompok");

	}
	
	
	
	 function add_record($data) 
 {
  $this->db->insert('tbl_kelompok', $data);
  return;
 }
  
	 function update_record($data) 
 {
  $this->db->where('id_kelompok',12);
  $this->db->update('tbl_kelompok', $data);
 }
	
	
	 function delete_row()
 {
  $this->db->where('id_kelompok', $this->uri->segment(3));
  $this->db->delete('tbl_kelompok');
 }

	
	
	 //query simpan krs
	function insertKrs($data) 
	{
		
			
			$this->db->insert('tbl_daftar_kkm',$data);
	
		
	}
	
	
}

/* End of file web_app_model.php */
/* Location: ./application/models/web_app_model.php */