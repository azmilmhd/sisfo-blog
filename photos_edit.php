<?php
include_once "app/Photos.php";
include_once "app/Post.php";
$id = $_GET['id'];
$photos= new app\Photos();
$rows = $photos->edit($id);

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
		<h2 align="center">EDIT DATA PHOTO</h2>
		<form action="photos_proses.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="photo_id" value="<?php echo $id; ?>">
		
		<table align="center">
			<tr><td>Tanggal Photo</td> </tr>
			<tr>
				<td><input class="nama" type="date" name="photo_date" value="<?php echo $rows['photo_date']; ?>"></td>
			</tr>

			<tr><td>Judul Photo</td></tr>
			<tr>
				<td><input type="file" name="photo_title" value="<?php echo $rows['photo_title']; ?>"></td>
			</tr>

			<tr>    
                    <td><img src="Upload/<?php echo $rows ['photo_title'] ?>" width="100px" height="100px"></td>

            </tr>

			<tr><td>Keterangan</td></tr>
			<tr>
				<td><input type="textarea" class="ket" name="photo_ket" required="" value="<?php echo $rows['photo_text']; ?>"></input></td>
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

				<div class="simpan" align="center">
					<input class="input" type="submit" name="edit" value="Update">
				<input class="reset" type="reset" name="" value="Reset">
				</div>
		</form>
 


		</div>
</body>
</html>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/input.css">