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
	
	
        <h2 style="margin-top:0px">FORMULIR PENDAFTARAN KKM</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tempat Tanggal Lahir <?php echo form_error('tempat_tanggal_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" placeholder="Tempat Tanggal Lahir" value="<?php echo $tempat_tanggal_lahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fakultas <?php echo form_error('fakultas') ?></label>
            <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Fakultas" value="<?php echo $fakultas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jurusan <?php echo form_error('jurusan') ?></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Semester <?php echo form_error('semester') ?></label>
            <input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Asal <?php echo form_error('alamat_asal') ?></label>
            <input type="text" class="form-control" name="alamat_asal" id="alamat_asal" placeholder="Alamat Asal" value="<?php echo $alamat_asal; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat_sekarang">Alamat Sekarang <?php echo form_error('alamat_sekarang') ?></label>
            <textarea class="form-control" rows="3" name="alamat_sekarang" id="alamat_sekarang" placeholder="Alamat Sekarang"><?php echo $alamat_sekarang; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keterangan Khusus <?php echo form_error('keterangan_khusus') ?></label>
            <input type="text" class="form-control" name="keterangan_khusus" id="keterangan_khusus" placeholder="Keterangan Khusus" value="<?php echo $keterangan_khusus; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Persyaratan <?php echo form_error('persyaratan') ?></label>
            <input type="text" class="form-control" name="persyaratan" id="persyaratan" placeholder="Persyaratan" value="<?php echo $persyaratan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kelompok <?php echo form_error('id_kelompok') ?></label>
            <input type="text" class="form-control" name="id_kelompok" id="id_kelompok" placeholder="Id Kelompok" value="<?php echo $id_kelompok; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Dpl <?php echo form_error('dpl') ?></label>
            <input type="text" class="form-control" name="dpl" id="dpl" placeholder="Dpl" value="<?php echo $dpl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Surat Keterangan Kuliah <?php echo form_error('surat_keterangan_kuliah') ?></label>
            <input type="text" class="form-control" name="surat_keterangan_kuliah" id="surat_keterangan_kuliah" placeholder="Surat Keterangan Kuliah" value="<?php echo $surat_keterangan_kuliah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bukti Lunas SPP<?php echo form_error('bukti_lunas_spp') ?></label>
            <input type="text" class="form-control" name="bukti_lunas_spp" id="bukti_lunas_spp" placeholder="Bukti Lunas Spp" value="<?php echo $bukti_lunas_spp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Formulir Pendaftaran <?php echo form_error('formulir_pendaftaran') ?></label>
            <input type="text" class="form-control" name="formulir_pendaftaran" id="formulir_pendaftaran" placeholder="Formulir Pendaftaran" value="<?php echo $formulir_pendaftaran; ?>" />
        </div>
	    <input type="hidden" name="nim" value="<?php echo $nim; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin/daftar_peserta_kkm') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>