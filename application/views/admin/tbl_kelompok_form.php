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
	for($id_kelompok=62; $id_kelompok<270; $id_kelompok++)
	{
	$id_kelompok
	}  
        <h2 style="margin-top:0px">INPUT DATA DPL</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NIDN <?php echo form_error('nidn') ?></label>
            <input type="text" class="form-control" name="nidn" id="nidn" placeholder="NIDN" value="<?php echo $nidn; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama<?php echo form_error('dpl') ?></label>
            <input type="text" class="form-control" name="dpl" id="dpl" placeholder="DPL" value="<?php echo $dpl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lokasi <?php echo form_error('lokasi') ?></label>
            <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi" value="<?php echo $lokasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div>
	    <input type="hidden" name="id_kelompok" value="<?php echo $id_kelompok; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin/cek_daftar_kelompok/') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>