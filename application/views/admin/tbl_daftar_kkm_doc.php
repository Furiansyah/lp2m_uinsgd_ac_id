<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <div align="center"><h2>DAFTAR PESERTA KKM 2016</h2></div>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Fakultas</th>
		<th>Jurusan</th>
		<th>Persyaratan</th>
		<th>Kelompok</th>
		
            </tr><?php
            foreach ($daftar_peserta_kkm_data as $daftar_peserta_kkm)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $daftar_peserta_kkm->nama ?></td>
		      <td><?php echo $daftar_peserta_kkm->jenis_kelamin ?></td>
		      <td><?php echo $daftar_peserta_kkm->tempat_tanggal_lahir ?></td>
		      <td><?php echo $daftar_peserta_kkm->fakultas ?></td>
		      <td><?php echo $daftar_peserta_kkm->jurusan ?></td>
		      <td><?php echo $daftar_peserta_kkm->id_kelompok ?></td>
		      <td><?php echo $daftar_peserta_kkm->dpl ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>