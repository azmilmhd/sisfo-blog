<html>
	<head>
	<title></title>
	</head>
<body>
	<div class="utama">
	<div class="isi">
	<form method="POST" action="kategori_proses.php">
	<center>	
	<h2 align="center">TAMBAH DATA KATEGORI</h2>
	<center>
	<table>
			
			
			<tr>
				<td><input class="nama" type="text" name="cat_nama" required placeholder="NAMA KATEGORI"></td>
			</tr>

			<tr>
				<td><textarea class="ket" name="cat_ket" required="" placeholder="CATEGORY KETERANGAN"></textarea></td>
			</tr> 
	</table>
			<div align="center" class="simpan">
				<input class="input" type="submit" name="simpan" value="Tambah">
				<input class="reset" type="reset" name="reset">
			</div>
	</center>
</form>
	</div>

</div>
</center>
<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/input.css">


<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');

