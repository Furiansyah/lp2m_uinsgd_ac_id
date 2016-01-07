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
						

						</div>
						<div class="col-md-6 nam-matis-1">
						

						</div>
						<div class="clearfix"> </div>
				</div>
				
				
				<div class="nam-matis-top">
				<div class="col-md-6 nam-matis-1">
						<h1><font color="green" face="Georgia, Times New Roman, Times, serif"> Manajemen Berita</font></h1>

    
    <div align="right">
    	<a href="<?php echo base_url() ?>adminweb/manajemen/tambah" class="tambah">Tambah berita</a>
    </div>
    
   <a href="<?php echo base_url() ?>adminweb/manajemen/daftar" class="tambah">Daftar Berita</a>
	
    <table width="100%" border="" cellspacing="0" cellpadding="0" class="myform">
  <tr>
    <th scope="col" >Judul</th>
	    <th scope="col">Kategori</th>

    <th scope="col">Status</th>
    <th scope="col">Penulis</th>
    <th scope="col">Tanggal</th>
    <th scope="col" width="70">Aksi</th>
  </tr>
  <?php foreach($berita as $list) { 
  $rows[]='<tr>
					<td>'. $list['judul'].'</td>
	<td>'. $list['id_kategori']. '</td>
    <td>'. $list['status_berita']. '</td>
    <td>'. $list['id_user']. '</td>
    <td>'. $list['tanggal']. '</td>
	<td><a href="edit/'. $list['id_berita'].'">EDIT |
		<a href="delete/'.  $list['id_berita'].'">DELETE</td>';
  }
  
  foreach($rows as $row)
		{
			echo $row;
		}
		?>

  </font>
</table>		

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
		<div class="blo-top">
		
								<li ><h3 align="center"><?php echo $username; ?></p></li>
							<li><h5 align="center"><a href="<?php echo site_url('adminweb/admin/logout'); ?>"><font color="#008000">[ Logout ]</font></a></li>
		</div>
	
	
		
		<h3>Media Sosial</h3>
		<div class="blo-top">
<a class="twitter-timeline" href="https://twitter.com/LP2M_UINSGD" data-widget-id="675119407560073216">Tweets by @LP2M_UINSGD</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>		</div>
		
		
		
		
	</div>
