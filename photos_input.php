<?php
include_once "app/Post.php";
$post = new app\Post();
$rowPost = $post->tampil();
?>

<html>
	<head>
	<title></title>
	</head>
<body>
	<div class="utama">
	
	<div class="isi">
	
	<form method="POST" action="photos_proses.php" enctype="multipart/form-data">
	<center>	
	<h2 align="center">Tambah Data Photos</h2>
	<center>
	<table>


			<tr><td>Tanggal Photo</td></tr>
			<tr>
				<td><input class="nama" type="date" name="photo_date"></td>
			</tr>

			<tr><td>Judul Photo</td></tr>
			<tr>
				<td><input  type="file" name="photo_title"></td>
			</tr>

			<tr><td>Keterangan</td></tr>
			<tr>
				<td><input class="nama" type="text" name="photo_text"></td>
			</tr>

			<tr><td>Id Post</td></tr>
			<tr>
			<td>
				<select class="nama" name="post_id">
            		<?php foreach($rowPost as $row) { ?>
            			<option value="<?php echo $row['post_id'] ?>"><?php echo $row['post_title'] ?></option>
            		<?php } ?>
          		</select>
			</td>
			</tr> 
	</table>
			<div class="simpan">
				<input class="input" type="submit" name="simpan" value="Tambah">
				<input class="reset" type="reset" name="reset">
			</div>
	</center>
</form>
	</div>

</div>
</center>


</body>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/input.css">