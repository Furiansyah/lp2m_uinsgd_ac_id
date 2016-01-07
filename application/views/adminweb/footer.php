<div class="clearfix"> </div>
		<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
						<div class="banner-1" >
						<a href="http://www.uin-suska.ac.id">
	<img src="<?php echo base_url(); ?>assets/images/uin/1.png" class="img-responsive" alt="">					 			</a>

						</div>
					
				</li>
				<li>
						<div class="banner-1" >
						<a href="http://www.uin-alauddin.ac.id">
	<img src="<?php echo base_url(); ?>assets/images/uin/2.png" class="img-responsive" alt="">					 </a>
						</div>
					
				</li><li>
						<div class="banner-1" >
							<a href="http://www.uin-malang.ac.id">
<img src="<?php echo base_url(); ?>assets/images/uin/3.png" class="img-responsive" alt="">					 </a>
						</div>
					
				</li><li>
						<div class="banner-1" >
							<a href="http://www.uin-suska.ac.id">

	<img src="<?php echo base_url(); ?>assets/images/uin/4.png" class="img-responsive" alt="">					 
						</div>
					
				</li><li>
						<div class="banner-1" >
												<a href="http://www.sunan-ampel.ac.id">

	<img src="<?php echo base_url(); ?>assets/images/uin/5.png" class="img-responsive" alt="">					 </a>
						</div>
					
				</li><li>
						<div class="banner-1" >
									<a href="http://www.uinjkt.ac.id">

	<img src="<?php echo base_url(); ?>assets/images/uin/6.png" class="img-responsive" alt="">					 </a>
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
		
			<div class="footer">
			<div class="col-md-3 foot-1">
				<h4>Internal Links</h4>
				<ul>
					<li><a href="http://www.uinsgd.ac.id">UIN SGD Bandung</a></li>
					<li><a href="http://www.ppsuinsgdbdg.ac.id">Pasca Sarjana</a></li>
					<li><a href="http://www.simak.uinsgd.ac.id">SIMAK</a></li>		
					<li><a href="http://www.pcmb.uinsgd.ac.id">PCMB Jalur Mandiri</a></li>
					<li><a href="http://www.komunikasi.uinsgd.ac.id">Ilmu Komunikasi</a></li>
					<li><a href="http://www.sarpras.uinsgd.ac.id">Sarana & Prasarana</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
					<h4>Fakultas</h4>
				<ul>
					<li><a href="http://www.fah.uinsgd.ac.id">Adab dan Humaniora</a></li>
					<li><a href="http://www.fdk.uinsgd.ac.id">Dakwah dan Komunikasi</a></li>
					<li><a href="http://www.psi.uinsgd.ac.id">Psikologi</a></li>
					<li><a href="http://www.fst.uinsgd.ac.id">Sains dan Teknologi</a></li>
					<li><a href="http://www.fsh.uinsgd.ac.id">Syariah dan Hukum</a></li>
					<li><a href="http://www.ftkuinsgd.ac.id">Tarbiyah dan Keguruan</a></li>
					<li><a href="http://www.fu.uinsgd.ac.id">Ushuluddin</a></li>
					<li><a href="http://www.fisip.uinsgd.ac.id">Ilmu Sosial dan Ilmu Politik</a></li>

				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Link Terkait</h4>
				<ul>
					<li><a href="http://www.uinsgd.ac.id">Perpustakaan</a></li>
					<li><a href="http://www.uinsgd.ac.id">Digital Library</a></li>
					<li><a href="http://www.journal.uinsgd.ac.id">E-Journal</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Kontak</h4>
				
				<ul>
					<li><strong>LP2M</strong> UIN SGD Bandung</li>
					<li><strong>Gedung</strong> Lecture Hall</li>
					<li><strong>Alamat		:</strong> Jln. A.H Nasution No.105</li>
					<li><strong>No. Telp	:</strong> 022 780 0525</li>
					<li><strong>Fax			:</strong> 022 780 3936</li>
					<li><strong>Email		:</strong> lp2m@uinsgd.ac.id</li>

				</ul>
			</div>
			
			
			<div class="clearfix"> </div>
			<div class="copyright">
				<p>© 2015 LP2M UIN SGD Bandung. All rights reserved | Design by <a href="<?php echo base_url(); ?>">Mitra Informatika</a></p>
			</div>
		</div>
	</div>
</body>
</html>