<!doctype html>
<html>
    <head>
<title>LP2M UIN SGD BANDUNG</title>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/logo-uin.png')?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">RINCIAN DAFTAR PESERTA</h2>
        <table class="table">
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Tempat Tanggal Lahir</td><td><?php echo $tempat_tanggal_lahir; ?></td></tr>
	    <tr><td>Fakultas</td><td><?php echo $fakultas; ?></td></tr>
	    <tr><td>Jurusan</td><td><?php echo $jurusan; ?></td></tr>
	    <tr><td>Semester</td><td><?php echo $semester; ?></td></tr>
	    <tr><td>Alamat Asal</td><td><?php echo $alamat_asal; ?></td></tr>
	    <tr><td>Alamat Sekarang</td><td><?php echo $alamat_sekarang; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Keterangan Khusus</td><td><?php echo $keterangan_khusus; ?></td></tr>
	    <tr><td>Persyaratan</td><td><?php echo $persyaratan; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Id Kelompok</td><td><?php echo $id_kelompok; ?></td></tr>
	    <tr><td>Dpl</td><td><?php echo $dpl; ?></td></tr>
	    <tr><td>Surat Keterangan Kuliah</td><td><?php echo $surat_keterangan_kuliah; ?></td></tr>
	    <tr><td>Bukti Lunas Spp</td><td><?php echo $bukti_lunas_spp; ?></td></tr>
	    <tr><td>Formulir Pendaftaran</td><td><?php echo $formulir_pendaftaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin/daftar_peserta_kkm') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>