<!doctype html>
<html>
    <head>
        <title>CEK KUOTA KELOMPOK</title>
        <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
	
	
        <h2 style="margin-top:0px">DAFTAR DOSEN PEMBIMBING LAPANGAN</h2>
        <div class="row" style="margin-bottom: 10px">
                  <div class="col-md-4">
                <?php echo anchor(site_url('admin/create'),'Create', 'class="btn btn-primary"'); ?>
	    <a href="<?php echo site_url('admin/pengabdian_masyarakat/') ?>" class="btn btn-default">Cancel</a>

            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
						                <?php echo anchor(site_url('admin/excel'),'Download', 'class="btn btn-primary"'); ?>

            </div>
            <div class="col-md-3 text-right">

                <form action="<?php echo site_url('admin/cek_daftar_kelompok/index'); ?>" class="form-inline" method="get">
                  
				    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                        
						    <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('admin/cek_daftar_kelompok'); ?>" class="btn btn-default">Reset</a>
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
                <th>Kelompok</th>
		<th>NIDN</th>
		<th>Dosen Pembimbing Lapangan</th>
		<th>Lokasi</th>
		<th>Kuota</th>
				<th>Action</th>

            </tr><?php
            foreach ($tbl_kelompok_data as $tbl_kelompok)
            {
                ?>
                <tr>
			<td width="80px"><?php echo $tbl_kelompok->id_kelompok ?></td>
			<td><?php echo $tbl_kelompok->nidn ?></td>
			<td><?php echo $tbl_kelompok->dpl ?></td>
			<td><?php echo $tbl_kelompok->lokasi ?></td>
			<td><?php echo $tbl_kelompok->jumlah ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('admin/read/'.$tbl_kelompok->id_kelompok),'Read'); 
				echo ' | '; 
				echo anchor(site_url('admin/update/'.$tbl_kelompok->id_kelompok),'Update'); 
				echo ' | '; 
				echo anchor(site_url('admin/delete/'.$tbl_kelompok->id_kelompok),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
		<b><font color="#FF0000">Catatan : Pastikan kuota kelompok tersedia.</font> </b>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>