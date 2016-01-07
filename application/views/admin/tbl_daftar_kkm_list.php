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
        <h2 style="margin-top:0px">DAFTAR PESERTA KKM</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('admin/create_peserta'),'DAFTAR', 'class="btn btn-primary"'); ?>
					    <a href="<?php echo site_url('admin/pengabdian_masyarakat/') ?>" class="btn btn-default">Cancel</a>

            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('admin/daftar_peserta_kkm/index'); ?>" class="form-inline" method="get">
				
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('admin/daftar_peserta_kkm'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
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
		<th>Action</th>
            </tr><?php
            foreach ($daftar_peserta_kkm_data as $daftar_peserta_kkm)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
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
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('admin/read_peserta/'.$daftar_peserta_kkm->nim),'Read'); 
				echo ' | '; 
				echo anchor(site_url('admin/update_peserta/'.$daftar_peserta_kkm->nim),'Update'); 
				echo ' | '; 
				echo anchor(site_url('admin/delete_peserta/'.$daftar_peserta_kkm->nim),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('admin/excel_peserta'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('admin/word_peserta'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>