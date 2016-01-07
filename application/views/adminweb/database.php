<div class="container">
	<div class="col-md-9 bann-right">
		
		<!-- nam-matis -->
		<style type="text/css">		
		#ck_slidess{
			margin: 0 0;
			width: 150px; 
			height: 150px; 
			border:0;
		}
		#ck_slidess > div { 
			position: absolute; 			
		}
		img{
			width: 250px;
			height: 120px;	
			
		}
	</style>
		<div class="nam-matis">
		
	<div class="nam-matis-top">
						<div class="col-md-6 nam-matis-1">
						<h1><font face="Times New Roman, Times, serif" color="green">Database Dokumen</h1></font>
    <?php echo form_open_multipart('adminweb/database/do_upload');?>
   <strong>  File :</strong> <input type="file" name="dokumen"/><br />
	<strong>Keterangan  :</strong> <input type="text" name="nama"/><br /><br />
            <input type="submit" value="Upload" name="submit"/><br />
<?php echo form_close();?>
<strong><font color="#FF0000"><br />Catatan : Upload file dokumen.
</strong></font>
<br /><br />
 <table border="2" width="600">
 <tr>
 <td>No</td>
 <td width="200">Nama</td>
<td>Dokumen</td>
<td>Download</td>
<td>Aksi</td>

</tr>
<?php

if(is_array($dokumen)) {
foreach($dokumen as $row) {
	$rows[]='<tr>
				<td align="center">'. $row['id'].'</td>
				<td align="center">'. $row['nama'].'</td>
				<td align="center">'. $row['file'].'</td>
			<td align="center"><a href="../../assets/download/'. $row['file'].'">&radic;</td>

<td align="center">Hapus</td>';
				}
				}

		foreach($rows as $row)
		{
			echo $row;
		}
		?>
		</table>
		</table>
						</div>
						<div class="col-md-6 nam-matis-1">
						

						</div>
						<div class="clearfix"> </div>
				</div>
				
				
				<div class="nam-matis-top">
				<div class="col-md-6 nam-matis-1">
						
						</div>
						<div class="col-md-6 nam-matis-1">
						
						</div>
						
							<div class="clearfix"> </div>
					</div>	
		</div>
		<!-- nam-matis -->	
	</div>
	<div class="col-md-3 bann-left">
		<div class="b-search">
 <form action="<?php echo site_url('home/hasil_cari/'); ?>" method="post" role="search">
				<input type="text" name="cari" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="">
			</form>
		</div>
		<h3>Informasi Pengguna</h3>
		<div class="blo-top" align="center">
		
							<li><p align="center"><?php echo $username; ?></li>
							<li><p align="center"><a href="<?php echo site_url('admin/admin/logout'); ?>"><font color="#008000">[ Logout ]</font></a></li>
		</div>
	
		
		<h3>Media Sosial</h3>
		<div class="blo-top">
<a class="twitter-timeline" href="https://twitter.com/LP2M_UINSGD" data-widget-id="675119407560073216">Tweets by @LP2M_UINSGD</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>		</div>
		
		
		
		
	</div>
