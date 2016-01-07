<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
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
        <h2>Tbl_daftar_kkm List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Fakultas</th>
		<th>Jurusan</th>
		<th>Semester</th>
		<th>Alamat Asal</th>
		<th>Alamat Sekarang</th>
		<th>No Telp</th>
		<th>Keterangan Khusus</th>
		<th>Persyaratan</th>
		<th>Foto</th>
		<th>Id Kelompok</th>
		<th>Dpl</th>
		<th>Surat Keterangan Kuliah</th>
		<th>Bukti Lunas Spp</th>
		<th>Formulir Pendaftaran</th>
		
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
		      <td><?php echo $daftar_peserta_kkm->semester ?></td>
		      <td><?php echo $daftar_peserta_kkm->alamat_asal ?></td>
		      <td><?php echo $daftar_peserta_kkm->alamat_sekarang ?></td>
		      <td><?php echo $daftar_peserta_kkm->no_telp ?></td>
		      <td><?php echo $daftar_peserta_kkm->keterangan_khusus ?></td>
		      <td><?php echo $daftar_peserta_kkm->persyaratan ?></td>
		      <td><?php echo $daftar_peserta_kkm->foto ?></td>
		      <td><?php echo $daftar_peserta_kkm->id_kelompok ?></td>
		      <td><?php echo $daftar_peserta_kkm->dpl ?></td>
		      <td><?php echo $daftar_peserta_kkm->surat_keterangan_kuliah ?></td>
		      <td><?php echo $daftar_peserta_kkm->bukti_lunas_spp ?></td>
		      <td><?php echo $daftar_peserta_kkm->formulir_pendaftaran ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>