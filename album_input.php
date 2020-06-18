<?php
include_once "app/Photos.php";
$photos = new app\Photos();
$rowPhotos = $photos->tampil();
?>

<html>
	<head>
	<title></title>
	</head>
<body>
	<div class="utama">
	<div class="isi">
	<form method="POST" action="album_proses.php">
	<center>	
	<h2 align="center">TAMBAH DATA ALBUM</h2>
	<center>
	<table>
			<tr><td>NAMA ALBUM</td></tr>
			<tr>
				<td><input class="nama" type="text" name="album_name"></td>
			</tr>

			<tr><td>KETERANGAN</td></tr>
			<tr>
				<td><input class="ket" type="textarea" name="album_ket" required=""></input></td>
			</tr>

			<tr><td>KETERANGAN FOTO</td></tr>
			<tr>
			<td>
				<select class="nama" name="photo_id">
            		<?php foreach($rowPhotos as $row) { ?>
            			<option value="<?php echo $row['photo_id'] ?>"><?php echo $row['photo_text'] ?></option>
            		<?php } ?>
          		</select>
			</td>
			</tr> 
	</table>
				<div class="simpan" align="center">
					<input class="input" type="submit" name="simpan" value="Simpan">
				<input class="reset" type="reset" name="" value="Reset">
				</div>
	</center>
	</form>
	</div>
</div>
</center>
</body>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/input.css">