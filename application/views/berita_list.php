<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Berita List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('c_berita/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
   
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Judul</th>
		<th>Id Kategori</th>
		<th>Slug</th>
		<th>Ringkasan</th>
		<th>Isi</th>
		<th>Status Berita</th>
		<th>Id User</th>
		<th>Tanggal</th>
		<th>Action</th>
            </tr><?php
            foreach ($c_berita_data as $c_berita)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $c_berita->judul ?></td>
			<td><?php echo $c_berita->id_kategori ?></td>
			<td><?php echo $c_berita->slug ?></td>
			<td><?php echo $c_berita->ringkasan ?></td>
			<td><?php echo $c_berita->isi ?></td>
			<td><?php echo $c_berita->status_berita ?></td>
			<td><?php echo $c_berita->id_user ?></td>
			<td><?php echo $c_berita->tanggal ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('c_berita/read/'.$c_berita->id_berita),'Read'); 
				echo ' | '; 
				echo anchor(site_url('c_berita/update/'.$c_berita->id_berita),'Update'); 
				echo ' | '; 
				echo anchor(site_url('c_berita/delete/'.$c_berita->id_berita),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>