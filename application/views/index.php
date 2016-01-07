<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LPPM UIN SGD BANDUNG</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/logo-uin.png')?>">

	<style type="text/css">
 
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
 
	body {
		background-color:#FFFFFF;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
 
	h1 {
		font-family:"Times New Roman", Times, serif;
		color: WHITE;
		background-color: GREEN;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
 
	#body{
		margin: 0 15px 0 15px;
		
	}
	
	p.footer{
		background-color:green;
		text-align:center;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 100px auto;
		width: 360px;		
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<body>
	
	<div id="container" align="center">
		
		<h1 align="center">	<img src="<?php echo base_url(); ?>assets/images/logo-uin.png" height="50" width="50"><br>LEMBAGA PENELITIAN DAN PENGABDIAN MASYARAKAT</h1>
		
	
		<div id="body">		
				<?php echo form_open("auth/cek_login"); ?>

			<table>				
				<tr>
					<td><font face="Georgia, Times New Roman, Times, serif"><strong>Username</strong></td><td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td><font face="Georgia, Times New Roman, Times, serif"><strong>Password</strong></td><td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="LOGIN"></td>
				</tr>				
			</table>
		</form>
<?php echo form_close(); ?>
 
	</div>
 
	<p class="footer" align="center"><font color="#FFFFFF" face="Times New Roman, Times, serif" size="4">UNIVERSITAS ISLAM NEGERI<BR>SUNAN GUNUNG DJATI<br>BANDUNG<br>2016
					
</p>
</div>
 
 
</body>
</html>