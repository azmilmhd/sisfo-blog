<?php
include_once "app/Kategori.php";
$kategori = new app\Kategori();
$rowKategori = $kategori->tampil();
?>
<html>
	<head>
	<title></title>
	</head>
<body>
	<div class="utama">
	<div class="isi">
	<form method="POST" action="post_proses.php">
	<center>	
	<h2 align="center">TAMBAH DATA POST</h2>
	<center>
	<table>
			
			<tr><td>Kategori</td></tr>
			<tr>
			<td>
				<select class="nama" name="cat_id">
            		<?php foreach($rowKategori as $row) { ?>
            			<option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_nama'] ?></option>
            		<?php } ?>
          		</select>
			</td>
			</tr>

			<tr><td>Tanggal Post</td></tr>
			<tr>
				<td><input class="nama" type="date" name="post_date"></td>
			</tr>

			<tr><td>Slug</td></tr>
			<tr>
				<td><input class="nama" type="text" name="post_slug"></td>
			</tr>

			<tr><td>Judul</td></tr>
			<tr>
				<td><input class="nama" type="text" name="post_title"></td>
			</tr>

			<tr><td>Keterangan</td></tr>
			<tr>
				<td><textarea class="nama" name="post_ket" required=""></textarea></td>
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
