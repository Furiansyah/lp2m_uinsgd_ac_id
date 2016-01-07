<div id="container">
	<h1>Dosen Pembimbing Lapangan - Sistem Informasi Manajemen Penelitian dan PPM</h1>

	<div id="body">
		<?php
			echo $bio;
			echo $menu;
		?>
		
		<p>
		<h2>
		Daftar Dosen Pembimbing Lapangan
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
    <?php echo form_open_multipart('dosen/simpan_dpl');?>
	<table class="zebra-table">
	<tr>
	<td>
	<strong>NIDN</td><td>:</td><td></strong> <input type="text" name="nidn"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong>Nama Lengkap</td><td>:</td><td></strong> <input type="text" name="dpl"/><br />
	</td>
	</tr>
	<tr>
	<td>
	<strong>Lokasi</td><td>:</td><td></strong>
	<select name="lokasi">
	<option value="">Silahkan Pilih</option>
	<option value="Majalengka">Majalengka</option>
	<option value="Kuningan">Kuningan</option>
	</select>
	</td>
	</tr>
	<tr>
	<td>
	<strong>Jumlah</td><td>:</td><td></strong> <input type="text" name="jumlah"/><br />
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
<br />Catatan : Pastikan data yang anda masukkan benar.


</strong></font>
<br /><br />
		</div>
		
	</div>
