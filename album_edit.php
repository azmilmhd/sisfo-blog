<?php
include_once "app/Album.php";
include_once "app/Photos.php";

$id = $_GET['id'];
$album= new app\Album();
$rows = $album->edit($id);

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
		<h2 align="center">EDIT DATA ALBUM</h2>
		<form action="album_proses.php" method="POST">
		<input type="hidden" name="album_id" value="<?php echo $id; ?>">
		<table align="center">
			<tr><td>Nama Album</td></tr>
			<tr>
				<td><input class="nama" type="text" name="album_name" value="<?php echo $rows['album_name']; ?>"></td>
			</tr>

			<tr><td>Keterangan</td></tr>
			<tr>
				<td><input type="textarea" class="ket" name="album_ket" required="" value="<?php echo $rows['album_text']; ?>"></input ></td>
			</tr>

			<tr><td>Id Photo</td></tr>
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
					<input class="input" type="submit" name="edit" value="Update">
					<input class="reset" type="reset" name="" value="Reset">
				</div>
		</form>
		</div>
</body>
</html>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/input.css">