<div class="container">
	<div class="contact">
 <div class="main-head-section">
		 		
		 			<h3>Contact</h3>
		 		
				<div class="contact-map">
			
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6618486356815!2d107.71524761436753!3d-6.930959869768442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd42c254a55d%3A0xee52343f78dc2e32!2sUIN+SUNAN+GUNUNG+DJATI+BANDUNG!5e0!3m2!1sen!2sid!4v1451368116210" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>
		 </div>
		
		<div class="contact_top">
			 		
			 			<div class="col-md-8 contact_left">
			 				
					        </div>
					        <div class="col-md-4 company-right">
					        	<div class="company_ad">
							     		
							   		</div>
							   		
							</div>	
							<div class="clearfix"> </div>
						
					</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
						<font face="Times New Roman, Times, serif" color="green">
	<h1><strong>Contact US</strong></h1>
	</font>

						</div>
						<div class="col-md-6 nam-matis-1">
						

						</div>
						<div class="clearfix"> </div>
				</div>
				
				
				<div class="nam-matis-top">
				<div class="col-md-6 nam-matis-1">
						
				
			<strong>Kantor :</strong><br />
				<strong>LPPM</strong> UIN Sunan Gunung Djati Bandung<br />
<strong>Gedung</strong> Lecture Hall<br />

				
					<strong>Alamat		: </strong> Jln. A.H Nasution No.105,Kec. Cibiru Bandung, Indonesia<br />
					<strong>Kode Pos	: </strong> 40614<br />
					<strong>No. Telp	: </strong> 022 780 0525<br />
					<strong>Fax			: </strong> 022 780 3936<br />
					<strong>Email		: </strong><a href="mailto:contact@uinsgd.ac.id">contact@uinsgd.ac.id</a><br />
<strong>Universitas Islam Negeri Sunan Gunung Djati Bandung</strong><br />
			
						
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
	</div>
