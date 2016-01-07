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
        <h2 style="margin-top:0px">Rincian</h2>
        <table class="table">
	    <tr><td>NIDN</td><td><?php echo $nidn; ?></td></tr>
	    <tr><td>Nama Dosen Pembimbing Lapangan</td><td><?php echo $dpl; ?></td></tr>
	    <tr><td>Lokasi</td><td><?php echo $lokasi; ?></td></tr>
	    <tr><td>Kuota</td><td><?php echo $jumlah; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin/cek_daftar_kelompok/') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>