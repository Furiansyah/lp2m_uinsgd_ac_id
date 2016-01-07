<div id="container">
	<h1>Beranda - Sistem Informasi Manajemen Penelitian dan PPM</h1>

	<div id="body">
		<?php
			echo $bio;
			echo $menu;
		?>
		
		<p>
		<h2>
		Daftar Proposal Penelitian
		</h2>
		</p>
		<style type="text/css">
		/* CSS for Zebra Table in index.html */
.zebra-table {
width: 100%;
border-collapse: collapse;
box-shadow: 0 2px 3px 1px #ddd;
overflow: hidden;
border:10px solid #fff;
}
.zebra-table tr,.zebra-table td{
vertical-align: top;
padding:10px 7px;
text-align: left;
margin:0;

}
.zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
background:#eee;
}/* End CSS for Zebra Table in index.html */
</style>
		<div id="list">
    <?php echo form_open_multipart('dosen/do_upload');?>
	<table class="zebra-table">
	<tr><td>
	<strong>Judul*</td><td>:</td><td></strong> <input type="text" name="judul"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong><font size="3">Ketua Penelitian</td>
	</td>
	</tr>
	<tr>
	<td>
	<strong>Nama Lengkap*</td><td>:</td><td></strong> <input type="text" name="nama_lengkap"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong>Jabatan*</td><td>:</td><td></strong> <input type="text" name="jabatan"/><br />
	</td>
	</tr>
	
	<tr>
	<td>
	<strong><font size="3" color="#eee">|</td><td></td><td></td>
	</td>
	</tr>
	<tr>
	<td>
	<strong>Jenis Proposal*</td><td>:</td><td></strong>
	<select name="jenis_proposal">
	<option value="">Silahkan Pilih Proposal</option>
	<option value="Proposal Penelitian">Proposal Penelitian</option>
	<option value="Proposal PPM">Proposal PPM</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>
	<strong>Lokasi Penelitian*</td><td>:</td><td></strong> <input type="text" name="lokasi_penelitian"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong>Waktu Penelitian*</td><td>:</td><td></strong> <input type="text" name="waktu_penelitian"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong>Biaya yang diusulkan*</td><td>:</td><td></strong> <input type="text" name="biaya"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong>File*</td><td>:</td><td></strong><input type="file" name="proposal"/><br />
	</td>
	</tr>
   
	<tr>
	<td>
	<strong></td><td></td><td></strong> <input type="submit" value="SAVE" name="submit"/><br /><br />
	</td>
	</tr>
	</table>
	<?php echo form_close();?>
<strong><font color="#FF0000">
<br />Catatan : Tipe file wajib berextensi (pdf).
<br />* Wajib diisi

</strong></font>
<br /><br />
		</div>
		
	</div>
