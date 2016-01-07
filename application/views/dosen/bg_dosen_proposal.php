<div id="container">
	<h1>Beranda - Sistem Informasi Manajemen Penelitian dan PPM</h1>

	<div id="body">
		<?php
			echo $bio;
			echo $menu;
		?>
		
		<p>
		<h2>
		Proposal yang telah tersimpan pada database LPPM
		</h2>
		</p>
		
		<div id="list">
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
		 <table border="2" width="600" class="zebra-table" align="center">
 <tr>
 <td>No</td>
 <td align="center">Judul</td>
<td>Nama Lengkap</td>
<td>Jabatan</td>
<td>Lokasi Penelitian</td>
<td>Waktu Penelitian</td>
<td>Biaya</td>
<td>File</td>
<td>Aksi</td>
</tr>
<?php

if(is_array($proposal)) {
foreach($proposal as $row) {
	$rows[]='<tr>
				<td align="center">'. $row['kode_proposal'].'</td>
				<td align="center">'. $row['judul'].'</td>
				<td align="center">'. $row['nama_lengkap'].'</td>
				<td align="center">'. $row['jabatan'].'</td>
				<td align="center">'. $row['lokasi_penelitian'].'</td>
				<td align="center">'. $row['waktu_penelitian'].'</td>
				<td align="center">'. $row['biaya'].'</td>
				<td align="center">'. $row['file'].'</td>
			<td align="center"><a href="../../assets/download/'. $row['file'].'">&radic;</td>';

				}
		
		foreach($rows as $row)
		{
			echo $row;
		}
				}else echo "Tidak ada Record didalam tabel";    

	
		?>
		</table>
		</table>
		</div>
		
	</div>
