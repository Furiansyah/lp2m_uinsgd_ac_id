<link href="<?php echo base_url(); ?>asset/css/jquery.fancybox-1.3.4.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("a[rel=example_group]").fancybox({
				'height'			: '70%',
				'width'				: '70%',
				'transitionIn'		: 'fade',
				'transitionOut'		: 'fade',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9,
				'type'              : 'iframe',
				'showNavArrows'   : false
			});});
</script>
<div id="container">
	<h1>Formulir Pendaftaran KKM - Sistem Informasi Manajemen Penelitian dan PKM</h1>

	<div id="body">
		<?php
			echo $bio;
			echo $menu;
			
		?>

<?php
$mahasiswakkm=4000;

$id_kelompok = rand(1,270);


?>
 

		<div class="cleaner_h10"></div>
<font face="Times New Roman, Times, serif" size="3">
<div align="center"><b>PERMOHONAN PENDAFTARAN<br />
PESERTA KULIAH KERJA NYATA MAHASISWA (KKM)<br />
UIN SUNAN GUNUNG DJATI BANDUNG<br />
TAHUN AKADEMIK 2015/2016</b>
</div><br />
<a href="<?php echo base_url(); ?>mahasiswa/cek_daftar_kelompok" target="_blank"><button type="button">CEK KUOTA KELOMPOK</button></a>
			
<?php echo form_open_multipart('../mahasiswa/do_upload'); ?>
	
	<table border="0" width="100%" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
	
	
	<tr>
		<td>KELOMPOK<?php echo form_error('id_kelompok') ?></td>
		<td><input name="id_kelompok" value="<?php echo $id_kelompok; ?>" type="text" readonly="readonly"  size="35" class="input-read-only"/></td>
		</tr>
		
		
	<tr>
		<td>NAMA<?php echo form_error('nama') ?></td>
		<td><input name="nama" value="<?php echo $nama; ?>" type="text" readonly="readonly"  size="35" class="input-read-only" /></td>
	</tr>
	<tr>
		<td>NIM<?php echo form_error('nim') ?></td>
		<td><input name="nim" value="<?php echo $nim; ?>" type="text" readonly="readonly"  size="35" class="input-read-only"/></td>
			</tr>
	<tr>
	<tr>
		<td>JENIS KELAMIN<?php echo form_error('jenis_kelamin') ?></td>
		<td><input name="jenis_kelamin" value="LAKI-LAKI" type="radio" readonly="readonly"  size="10" class="input-read-only"/>L
			<input name="jenis_kelamin" value="PEREMPUAN" type="radio" readonly="readonly"  size="10" class="input-read-only"/>P</td>
			</tr>
	<tr>
		<td>TEMPAT/TANGGAL LAHIR<?php echo form_error('tempat_tanggal_lahir') ?></td>
		<td><input name="tempat_tanggal_lahir" value="<?php echo $tempat_tanggal_lahir; ?>" type="text" size="35" class="input-read-only" /><br />
		Format : Tempat, HH/BB/TTTT, contoh : BANDUNG, 18/02/1982</td>
		
	</tr>
	<tr>

		<td>FAKULTAS<?php echo form_error('fakultas') ?></td>
		<td><input name="fakultas" value="<?php echo $fakultas; ?>" type="text" size="35" readonly="readonly" class="input-read-only" />
		</td>			
	</tr>
	<tr>
		<td>JURUSAN<?php echo form_error('jurusan') ?></td>
		<td><input name="jurusan" value="<?php echo $jurusan; ?>" type="text"  size="35" readonly="readonly" class="input-read-only"/></td>
			</tr>
	<tr>

		<td>SEMESTER<?php echo form_error('semester') ?></td>
		<td><input name="semester" value="<?php echo $semester; ?>" type="text" size="35" class="input-read-only" /></td>
	</tr>
	<tr>
		<td>ALAMAT ASAL (LENGKAP)<?php echo form_error('alamat_asal') ?></td>
		<td><input name="alamat_asal" value="<?php echo $alamat_asal; ?>" type="text" size="70" class="input-read-only"/></td>
	</tr>
	<tr>
		<td>ALAMAT SEKARANG (LENGKAP)<?php echo form_error('alamat_sekarang') ?></td>
		<td><input name="alamat_sekarang" value="<?php echo $alamat_sekarang; ?>" type="text" size="70" class="input-read-only"/></td>
	</tr>
	
	<tr>
		<td>NO. TELP/HP<?php echo form_error('no_telp') ?></td>
		<td><input name="no_telp" value="<?php echo $no_telp; ?>" type="text"   size="35" class="input-read-only"/></td>
	</tr>
	
	<tr>
		<td>KETERANGAN KHUSUS**</td>
		<td>
		<input name="keterangan_khusus" value="MENIKAH," type="checkbox" readonly="readonly"   size="20" class="input-read-only"/>Menikah
		<input name="keterangan_khusus" value="HAMIL," type="checkbox" readonly="readonly"   size="20" class="input-read-only"/>Hamil
		<input name="keterangan_khusus" value="SAKIT KRONIS," type="checkbox" readonly="readonly"   size="20" class="input-read-only"/>Sakit Kronis
	<input name="keterangan_khusus" value="BEKERJA," type="checkbox" readonly="readonly"   size="20" class="input-read-only"/>Bekerja
	<input name="keterangan_khusus" value="TIDAK ADA" type="checkbox"  readonly="readonly"   size="20" class="input-read-only"/>Tidak ada
	</td>
	</tr>
	<tr>



		<td>UPLOAD</td>

		<td><input name="userfile0" type="file"  size="35" ><br />
		<strong><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2">Surat Keterangan</strong></td>
	</tr>
	
	<tr>
		<td></td>

		<td><input name="userfile1" type="file" size="35"><br />
			<strong><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2">Bukti telah melunasi SPP Semester Genap 2015/2016</strong></td>

	</tr><tr>
	<td></td>

		<td><input name="userfile2" type="file"  size="35" ><br />
				<strong><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2">Foto ukuran 2x3 (formal)</strong></td>

	</tr>
	
	<tr>
	<td></td>
	</tr>
	<tr>
		<td><b>Petunjuk Pendaftaran Online:</b></td>
	</tr>
	<tr>
	
		<td align="justify" colspan="2">
		1. Formulir ini diisi oleh ybs, dengan huruf kapital.<br />
		2. Melampirkan surat keterangan telah menyelesaikan kuliah Semester VII atau 75% jumlah SKS dari fakultas masing-masing.<br />
		3. Melampirkan bukti telah melunasi SPP semester genap tahun akademik 2016.<br />
		4. Melampirkan foto berukuran 2 x 3.<br />
		5. Format penulisan nama pada file lampiran sbb : NIM_Jenis File.
		</td>
	</tr>
	<tr>
	
		<td><b>Dengan ini :</b></td>
	</tr>
	<tr>
	
		<td align="justify" colspan="2">
		1. Mengajukan permohonan untuk menjadi peserta Kuliah Kerja Nyata Mahasiswa.<br />
		2. Bersedia ditempatkan diseluruh wilayah Kuliah Kerja Nyata Mahasiswa.<br />
		3. Bersedia memenuhi dan mentaati ketentuan yang telah ditetapkan PP-KKM, serta bersedia menerima sanksi jika melanggar ketentuan tersebut.
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
<input type="submit" value="DAFTAR" name="submit" /><br />
<strong><font color="#FF0000" face="Arial, Helvetica, sans-serif" size="2">Catatan : Pastikan data diri dan lampiran telah lengkap dan benar.</strong>

</p>	
		</form>
		</td>
	</tr>
	</table>
		<?php echo form_close();?>

		
		

	
	</div>
	
