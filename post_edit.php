<?php
include_once "app/Post.php";
include_once "app/Kategori.php";

$id = $_GET['id'];
$post = new app\Post();
$rows = $post->edit($id);

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
		<h2 align="center">EDIT DATA POST</h2>
		<form action="post_proses.php" method="POST">
		<input type="hidden" name="post_id" value="<?php echo $id; ?>">
		<table align="center">
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

		    <tr><td>Tanggal Post</td> </tr>
		    <tr>
				<td><input class="nama" type="date" name="post_date" value="<?php echo $rows['post_date']; ?>"></td>
			</tr>

			<tr><td>Slug</td></tr>
			<tr>
				<td><input class="nama" type="text" name="post_slug" value="<?php echo $rows['post_slug']; ?>"></td>
			</tr>

			<tr><td>Judul</td></tr>
			<tr>
				<td><input class="nama" type="text" name="post_title" value="<?php echo $rows['post_title']; ?>"></td>
			</tr>

			<tr><td>Keterangan</td></tr>
			<tr>
				<td><input class="ket" type="textarea" name="post_ket" value="<?php echo $rows['post_text']; ?>"></td>
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