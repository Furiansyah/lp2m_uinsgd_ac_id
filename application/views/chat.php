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
					
						 <script>    
        $(document).ready(function(){
         
        function tampildata(){
           $.ajax({
            type:"POST",
            url:"<?=site_url('pusat_pengabdian_masyarakat/ambil_pesan');?>",    
            success: function(data){                 
                     $('#isi_chat').html(data);
            }  
           });
        }
   
   
         $('#kirim').click(function(){
           var pesan = $('#pesan').val(); 
           var name = $('#name').val(); 
           $.ajax({
            type:"POST",
            url:"<?=site_url('pusat_pengabdian_masyarakat/kirim_chat');?>",    
            data: 'pesan=' + pesan + '&name=' + name,        
            success: function(data){                 
              $('#isi_chat').html(data);
            }  
           });
          });
           
           
          setInterval(function(){
                     tampildata();},1000);
        });
    </script>
    <style>
      #isi_chat{height:400px;}
    </style>

 
<div id="container">
    <h1>Forum Diskusi</h1>
 
    <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Kotak Percakapan</h3>
            </div>
            <div class="panel-body" >
             <ul id="isi_chat"> <ul>
            </div>
          </div>
           
          <div class="col-md-8">
              <input placeholder="nama" type="text" id="name" class="form-control">
          </div>
		  							<div class="clearfix"> </div>

                    <div class="col-md-8">
              <input placeholder="pesan" type="text" id="pesan" class="form-control">
          </div>
		  							<div class="clearfix"> </div>

          <div class="col-md-8">
          <input type="button" value="kirim" id="kirim" class="btn btn-md btn-warning">
          </div>
    </div>
</div>
									
 

						</div>
						
						
						<div class="col-md-6 nam-matis-1">
						<p><img src="<?php echo base_url(); ?>assets/posting/logo.png" alt="" /></p>
						<h3>Catatan :</h3>
						1. Forum Silaturahmi<br />
						2. Gunakanlah bahasa yang sopan dan santun

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
	</div>