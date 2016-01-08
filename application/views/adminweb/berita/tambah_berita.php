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
						<h1><font color="green" face="Georgia, Times New Roman, Times, serif">Menambah berita</font></h1><br /><br />
 
	 			<!-- TinyMCE 3.x -->
 
			<script type="text/javascript" src="<?php echo base_url() ?>assets/tinymce/jscripts/tiny_mce/tiny_mce_src.js"></script>
            <script type="text/javascript">
             
            //http://cariprogram.blogspot.com
            //nuramijaya@gmail.com

            tinyMCE.init({
             
              mode : "textareas",
                
              // ===========================================
              // Set THEME to ADVANCED
              // ===========================================
                
              theme : "advanced",
                
              // ===========================================
              // INCLUDE the PLUGIN
              // ===========================================
             
              plugins : "jbimages,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
                
              // ===========================================
              // Set LANGUAGE to EN (Otherwise, you have to use plugin's translation file)
              // ===========================================
             
              language : "en",
                 
              theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
              theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
              theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
             
              // ===========================================
              // Put PLUGIN'S BUTTON on the toolbar
              // ===========================================
             
              theme_advanced_buttons4 : "jbimages,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
                
              theme_advanced_toolbar_location : "top",
              theme_advanced_toolbar_align : "left",
              theme_advanced_statusbar_location : "bottom",
              theme_advanced_resizing : true,
                
              // ===========================================
              // Set RELATIVE_URLS to FALSE (This is required for images to display properly)
              // ===========================================
             
              relative_urls : false
                
            });
             
            </script>
			
    <?php echo validation_errors(); ?>
	<form name="form1" method="post" action="<?php echo base_url() ?>adminweb/manajemen/tambah" class="myform">
	  <p>
	    <label for="judul">Judul berita</label>
	    <input name="judul" type="text" id="judul" size="70">
      </p>
	    <p>
	    <label for="kategori">Kategori		</label>
  <select name="id_kategori" id="id_kategori">
 		  <option>Pilih Kategori</option>
	      <option value="1">Berita</option>
	      <option value="2">Galeri</option>
		  <option value="3">Pengumuman</option>
	      <option value="4">Volunteer</option>
        </select>
	   </p>

	  <p>
	    <label for="ringkasan">Dokumentasi berita		</label>
		<strong><font color="#FF0000">Catatan : Ukuran file dokumentasinya besar</font></strong>	    <textarea name="ringkasan" id="ringkasan" cols="45" rows="5"></textarea>
	  </p>
	  	
	  <p>
	    <label for="isi">Isi berita</label>
	    <textarea name="isi" id="isi" cols="45" rows="5"></textarea>
	  </p>
	  <p>
	    <label for="status_berita">Status berita</label>
	    <select name="status_berita" id="status_berita">
	      <option value="Publish">Publikasikan</option>
	      <option value="Draft">Simpan sebagai draft</option>
        </select>
	    <input name="id_user" type="hidden" id="id_user" value="1">
	  </p>
	  <p>
	    <input type="submit" name="submit" id="submit" value="Submit">
	    <input type="reset" name="submit2" id="submit2" value="Reset">
	  </p>
  </form>
	<p>&nbsp;</p>

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
		<div class="blo-top">
		
							<li><p align="center"><?php echo $username; ?></li>
							<li><p align="center"><a href="<?php echo site_url('adminweb/c_admin/logout'); ?>"><font color="#008000">[ Logout ]</font></a></li>
		</div>
	
		
		<h3>Media Sosial</h3>
		<div class="blo-top">
<a class="twitter-timeline" href="https://twitter.com/LP2M_UINSGD" data-widget-id="675119407560073216">Tweets by @LP2M_UINSGD</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	

</div></div>
		
		
		
