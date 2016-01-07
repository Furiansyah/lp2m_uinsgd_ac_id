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
									<?php echo $list['ringkasan'] 			 ?> 
									<div class="caption">
									<a href="<?php echo base_url();?>main/read/<?php echo$list['slug']?>">
									<h3><?php echo $list['judul']?></h3>
<?php echo word_limiter($list['isi'],20)?>...</a>
									
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
			height: 120px;	
			
		}
	</style>
		<div class="nam-matis">
		
	<div class="nam-matis-top">
						<div class="col-md-6 nam-matis-1">
						<h1><font color="green" face="Georgia, Times New Roman, Times, serif">Hasil Pencarian</font></h1><br /><br />
<table border="1" width="780px">
			<thead>
				
			</thead>
			<tbody>
				<?php
				if (count($ListBerita) > 0) {
					foreach($ListBerita as $row)
					{
						echo "<div class=\"letter\">";
						?>

						<h4><b><a href="<?php echo base_url();?>home/read/<?php echo 
$list['slug']?>"><?php echo $list['judul']?></a></b></h4>

<div><?php echo $list['tanggal']?></div>

<p><?php echo $list['ringkasan']?>

<p><?php echo word_limiter($list['isi'],40)?>

<span><p align="left"><a href="<?php echo base_url();?>home/read/<?php echo 
$list['slug']?>">Baca Selengkapnya&rsaquo;</a></b><br>
</p><br>



				<?php
						echo "</div>";
					}
					echo "<tr><td colspan='6'><div style='background:000; float:right;'>".$this->pagination->create_links()."</div></td></tr>";
				} else {
					echo "<tbody><tr><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tr></tbody>";
				}
				?>
			</tbody>
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
				<input type="submit" value="" name="q">
			</form>
		</div>
		<h3>Unit Kerja</h3>
		<div class="blo-top">
		<font size="1">
		<li><a href="<?php echo base_url(); ?>home/read/pusat-penelitian-dan-pengabdian-masyarakat">Pusat Penelitian dan Penerbitan</a></li>
		<li><a href="<?php echo base_url(); ?>home/read/pusat-pengabdian-masyarakat">Pusat Pengabdian Masyarakat</a></li>
		<li><a href="<?php echo base_url(); ?>home/read/pusat-studi-gender-dan-anak">Pusat Studi Gender dan Anak</a></li>
		</div>
		<h3>Recent Posts</h3>
		<div class="blo-top">
			 <?php foreach ($ringkasan as $list): ?>
<article>

			<div class="blog-grids">
				<div class="blog-grid-left">
				</div>
				<div class="blog-grid-right">
				<a href="<?php echo base_url();?>main/read/<?php echo$list['slug']?>">
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
							<li><a href="<?php echo base_url(); ?>kkm">Kuliah Kerja Mahasiswa</a></li>
							<li><a href="<?php echo base_url(); ?>volunteer"> Volunteer</a></li>
							<li><a href="<?php echo base_url(); ?>galeri">Galeri</a></li>
		</div>
		<h3>Agenda Mendatang</h3>
		<div class="blo-top">
		<li><a href="<?php echo base_url(); ?>berita">Berita</a></li>
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
	</div>
	<div class="clearfix"> </div>
		<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
						<div class="banner-1" id="ck_slidess">
	<img src="<?php echo base_url(); ?>assets/images/logo-uin.png" class="img-responsive" alt="">					 
						</div>
					
				</li>
					<li>
						<div class="banner-1" id="ck_slidess">
	<img src="<?php echo base_url(); ?>assets/images/LOGO_UIN_SYARIF_HIDAYATULLAH_JAKARTA.png" class="img-responsive" alt="">					 
						</div>
					
				</li>
					<li>
						<div class="banner-1" id="ck_slidess">
	<img src="<?php echo base_url(); ?>assets/images/sby.jpg" class="img-responsive" alt="">					 
						</div>
					
				</li>
					<li>
						<div class="banner-1" id="ck_slidess">
	<img src="<?php echo base_url(); ?>assets/images/Logo_UIN_Walisongo.png" class="img-responsive" alt="">					 
						</div>
					
				</li>
					<li>
						<div class="banner-1" id="ck_slidess">
	<img src="<?php echo base_url(); ?>assets/images/ygy.jpg" class="img-responsive" alt="">					 
						</div>
					
				</li>
					
						
			</ul>
							
<script>
	$(document).ready(function(){
		$("#ck_slidess > div:gt(0)").hide();
			setInterval(function() { 
			$('#ck_slidess > div:first')
			.fadeOut(100)
			.next()
			.fadeIn(900)
			.end()
			.appendTo('#ck_slidess');
		},  3000);
	});
</script>
							 <script type="text/javascript">
								$(window).load(function() {
									
									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
								</script>
								<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexisel.js"></script>
					<div class="clearfix"> </div>
		</div>