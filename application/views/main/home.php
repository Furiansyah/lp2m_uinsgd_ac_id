<div class="container">
	<div class="col-md-9 bann-right">
		<!-- banner -->
		<div class="banner">		
			<div class="header-slider">
				<div class="slider">
					<div class="callbacks_container">
					  	<ul class="rslides" id="slider"  >
							 <?php foreach ($ringkasan as $list): ?>
								<article>
							<li>
						<?php echo $list['ringkasan']?>
						<div class="caption">
						<a href="<?php echo base_url();?>home/read/<?php echo$list['slug']?>">
						<font color="#FFFFFF">
						<h3><?php echo $list['judul']?></h3>
						<?php echo word_limiter($list['isi'],10)?>... </font>
						</a>
									</div>
						  </li>
						 
							</article>
							<?php endforeach; ?>
						</ul>
						
			  		</div>
			  </div>
			</div>
		</div>
		<!-- banner -->	
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
			height: 150px;	
			
		}
	</style>
		<div class="nam-matis">
		
	<div class="nam-matis-top">
						<div class="col-md-6 nam-matis-1">
						<h1><font color="green" face="Georgia, Times New Roman, Times, serif">Berita</font></h1><br /><br />
<?php foreach ($ringkasan as $list): ?>
<article>

<h4><b><a href="<?php echo base_url();?>home/read/<?php echo 
$list['slug']?>">
<font color="green" face="Georgia, Times New Roman, Times, serif"><?php echo $list['judul']?></b></h4></font>
<h6>Posted on, <?php echo $list['tanggal']?> by admin</h6>
<?php echo $list['ringkasan']?>
<font color="#000000"><?php echo word_limiter($list['isi'],20)?>
<p><b>Baca Selengkapnya ...</b></p>
</a></article>
<?php endforeach; ?>

						</div>
						<div class="col-md-6 nam-matis-1">
						<h1><font color="green" face="Georgia, Times New Roman, Times, serif">Terkini</font></h1><br />
<?php
$kategori=mysql_query("select * from kategori");
while($k=mysql_fetch_array($kategori)){

  echo "<h3>$k[nama_kategori]</h3>";
  $berita=mysql_query("select * from kategori, berita where kategori.id_kategori=berita.id_kategori and berita.id_kategori='$k[id_kategori]'");

  // looping untuk menampilkan judul berita 
  // yang berhubungan dengan kategori masing-masing
  $b=4;
 while($b=mysql_fetch_array($berita) ){
  
   
    echo "<li><a href='home/read/$b[slug]'>$b[judul]</a></li>";

$b--;
  } // end while looping berita

} // end while looping kategori

?>

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
 <form action="<?php echo base_url('home/hasil_cari/'); ?>" method="post" role="search">
				<input type="text" name="cari" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="" name="q">
		  </form>
		</div>
	
							 
		
		<h3>Recent Posts</h3>
		<div class="blo-top">
			 <?php foreach ($ringkasan as $list): ?>
<article>

			<div class="blog-grids">
				<div class="blog-grid-left">
				</div>
				<div class="blog-grid-right">
				<a href="<?php echo base_url();?>home/read/<?php echo$list['slug']?>">
		<font size="1">
<?php echo $list['judul']?>&rsaquo;</a></font>
				</div>	
				<div class="clearfix"> </div>
			</div>
	</article>
<?php endforeach; ?>
		</div>
		<h3>Kategori</h3>
		<div class="blo-top">
							<li><a href="<?php echo base_url(); ?>berita">Berita</a></li>
							<li><a href="<?php echo base_url(); ?>pengumuman">Pengumuman</a></li>
							<li><a href="<?php echo base_url(); ?>volunteer">Volunteer</a></li>
							<li><a href="<?php echo base_url(); ?>galeri">Galeri</a></li>
		</div>
		
		<h3>Media Sosial</h3>
		<div class="blo-top">
<a class="twitter-timeline" href="https://twitter.com/LP2M_UINSGD" data-widget-id="675119407560073216">Tweets by @LP2M_UINSGD</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>		</div>
		
		
		
		<h3>Newsletter</h3>
				<div class="blo-top">
			<div class="name">
				<form>
					<input type="text" placeholder="email" required="">
				</form>
			</div>	
			<div class="button">
				<form>
					<input type="submit" value="Subscribe">
				</form>
			</div>
				<div class="clearfix"> </div>
		</div>
		<h3>Jumlah Pengunjung</h3>
			<div class="blo-top" align="center">
			
			<script id="_wauk18">var _wau = _wau || [];
_wau.push(["colored", "4ebtty08u7vr", "k18", "046100ddffdb"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/colored.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
			</div>
		
	</div>
	