

<html>
<head>

    <title>Cetak Formulir Pendaftaran</title>
</head>
<body>

<table border="1" align="right">
<tr><td width="120" align="left">No. Daftar :</td>
</tr>
<tr><td align="center">Untuk PPKKM</td> 
</tr>
</table>

<div align="center">
PERMOHONAN PENDAFTARAN<br>
PESERTA KULIAH KERJA NYATA MAHASISWA (KKM)<br>
UIN SUNAN GUNUNG DJATI BANDUNG<BR>
TAHUN AKADEMIK 2015/2016<BR>
</div>
Yang bertanda tangan dibawah ini :<br>
<?php
    foreach($data->result() as $row){ ?>

       
		 
		 
<table width="80%" height="70" border="0" align="left">
<tr>
		<td width="200">NAMA</td><td>:</td><td><?php echo $row->nama; ?></td></tr><tr>
		
		<td >NIM</td><td>:</td><td><?php echo $row->nim; ?></td></tr><tr>
				<td >JENIS KELAMIN</td><td>:</td><td><?php echo $row->jenis_kelamin; ?></td></tr><tr>

		<td >TEMPAT/TANGGAL LAHIR</td><td>:</td><td><?php echo $row->tempat_tanggal_lahir; ?></td></tr><tr>
		<td >FAK. JURUSAN/SEMESTER</td><td>:</td><td><?php echo $row->fakultas; echo '. '; echo $row->jurusan; echo ' / ';  echo $row->semester; ?></td></tr><tr>
		<td >ALAMAT ASAL (LENGKAP)</td><td>:</td><td><?php echo $row->alamat_asal; ?></td></tr><tr>
		<td >ALAMAT SEKARANG (LENGKAP)</td><td>:</td><td><?php echo $row->alamat_sekarang; ?></td></tr><tr>
		<td >NO. TELEPON/HP</td><td>:</td><td><?php echo $row->no_telp; ?></td></tr><tr>
		<td >KETERANGAN KHUSUS**</td><td>:</td><td><?php echo $row->keterangan_khusus; ?></td></tr><tr>
		<td >KELOMPOK</td><td>:</td><td><?php echo $row->id_kelompok; ?></td></tr><tr>

		<td >PERSYARATAN***</td><td>:</td><td>O Lengkap O Belum Lengkap</td></tr>
		 
   <?php 
}
?>

</table>

<table>
<tr >
<td  align="center"><img src="<?php echo base_url(); ?>assets/images/2x3.png" height="100" width="100">
</td>
<td width="30"> </td>
<td align="justify">Dengan ini :<br>
1. Mengajukan permohonan untuk menjadi peserta Kuliah Kerja Nyata Mahasiswa.<br>
2. Bersedia ditempatkan diseluruh wilayah Kuliah Kerja Nyata Mahasiswa.<br>
3. Bersedia memenuhi dan mentaati ketentuan yang telah ditetapkan PP-KKM, serta bersedia<br>
menerima sanksi jika melanggar ketentuan tersebut.
</td>
</tr>

</table>
<br>
Telah memenuhi syarat akademik
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bandung<br>
Fakultas/Jurusan***
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemohon,<br>
<br><br><br><br>

................................................
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->nama; ?> <br>
NIP.
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIM.<?php echo $row->nim; ?> <br>
<br>
.............................................................................................................................................................................................................<br/><br/>

<table border="1" align="right">
<tr><td width="120" align="left">No. Daftar :</td>
</tr>
<tr><td align="center">Untuk Mahasiswa</td> 
</tr>
</table>
<div align="center">
BUKTI PENDAFTARAN<br>
PESERTA KULIAH KERJA NYATA MAHASISWA (KKM)<br>
UIN SUNAN GUNUNG DJATI BANDUNG<BR>
TAHUN AKADEMIK 2015/2016<BR>
</div>
Yang bertanda tangan dibawah ini :<br>
<?php
    foreach($data->result() as $row){ ?>
 
<table width="80%" border="0" align="left">
<tr>

		<td width="200">NAMA</td><td>:</td><td><?php echo $row->nama; ?></td></tr>
		<tr>
		
		<td >NIM</td><td>:</td><td><?php echo $row->nim; ?></td>
		</tr>
		<tr>
				<td >JENIS KELAMIN</td><td>:</td><td><?php echo $row->jenis_kelamin; ?></td>
				</tr><tr>

		<td >TEMPAT/TANGGAL LAHIR</td><td>:</td><td><?php echo $row->tempat_tanggal_lahir; ?></td></tr><tr>
		<td >FAK. JURUSAN/SEMESTER</td><td>:</td><td><?php echo $row->fakultas; echo '. '; echo $row->jurusan; echo ' / ';  echo $row->semester; ?></td></tr><tr>
				<td >KELOMPOK</td><td>:</td><td><?php echo $row->id_kelompok; ?></td></tr><tr>

		<td >PERSYARATAN***</td><td>:</td><td>O Lengkap O Belum Lengkap</td></tr>
		
		 

</table>
<table border="0">
<tr >
<td width="100"></td>
<td colspan="2">
Dengan ini :<br>
1. Mengajukan permohonan untuk menjadi peserta Kuliah Kerja Nyata Mahasiswa.<br>
2. Bersedia ditempatkan diseluruh wilayah Kuliah Kerja Nyata Mahasiswa.<br>
3. Bersedia memenuhi dan mentaati ketentuan yang telah ditetapkan PP-KKM, serta bersedia<br>
menerima sanksi jika melanggar ketentuan tersebut.
</td>
</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bandung<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas/Penerima Pendaftaran
<table border="0">
<tr>
<td>
Catatan :<br>
1. Formulir ini diisi oleh ybs, dengan huruf kapital.<br>
2. Nomor daftar diisi oleh petugas*<br>
3. Ditandatangani oleh pejabat yang berwenang***
</td>
<td width="50"></td>
<td>
<img src="<?php echo base_url(); ?>assets/images/2x3.png" height="80" width="100">

</td>
</tr>
</table>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .....................................................
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP.

   <?php 
}
?>

</body>
</html>