<div id="container">
	<h1>Cetak - Formulir Pendaftaran - Sistem Informasi Manajemen Penelitian dan PKM</h1>

	<div id="body">
		<?php
			echo $bio;
			echo $menu;
			
		?>
		<div class="cleaner_h10"></div>
		<?php 
		$temp='';
		$rows=array();
		$totalNH=0;	
		$totalSKS=0;
		$no=1;
		?>
	<?php echo form_open_multipart('../mahasiswa/validasi_formulir');?>

		<table border="1" width="100%" style="border-collapse: collapse;" cellpadding="5" align="center">
		<tr style="background-color:#000; color:#FFFFFF;">
		<td align="center">No</td>
		<td align="center">NIM</td>
		<td align="center">Nama</td>
		<td align="center">Jurusan</td>
		<td align="center">Fakultas</td>
		<td align="center">Kelompok</td>	
	<td align="center">Validasi Formulir</td>	
		</tr>
		<?php
		foreach($kkm->result_array() as $value)
		{
				$rows[]='<tr>
				<td align="center">'. $no.'</td>
				<td align="center">'. $value['nim'].'</td>
				<td align="center">'. $value['nama'].'</td>
				<td align="center">'. $value['jurusan'].'</td>
				<td align="center">'. $value['fakultas'].'&nbsp;</td>
				<td align="center">'. $value['id_kelompok'].'</td>
				<td align="center">'. $value['formulir_pendaftaran'].'</td>';
				
		
		}
	

		
		$rows[]='
				<tr>
				<td colspan="4" align="right"><strong>Silahkan untuk mencetak Formulir Pendaftaran</strong></td>
				<td  align="center">
				<strong><a href="cetak_formulir_pendaftaran_KKM_2016" target="_blank"><b><button type="button">CETAK</button></b></a></td>
				
				<td  align="center" colspan="2"><strong><input name="userfile0" type="file">
				<input type="submit" value="VALIDASI" name="submit" /></td>
			
				</tr>';
	
		foreach($rows as $row)
		{
			echo $row;
		}
		?>
	

	
	</table></table>
			<?php echo form_close();?>

<font color="#FF0000"><strong>Catatan : Upload formulir yang telah ditanda tangani oleh pemohon dan pihak fakultas, untuk validasi formulir.</strong></font>