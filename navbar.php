<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/nav.css">
<div class="header">
	<div class="nav">
		<a href="index2.php">HOME</a>
		<a href="index2.php?halaman=kategori_tampil">KATEGORI</a>
		<a href="index2.php?halaman=post_tampil">POST</a>
		<a href="index2.php?halaman=photos_tampil">FOTO</a>
		<a href="index2.php?halaman=album_tampil">ALBUM</a>
		<a style="padding-left: 830px;" href="index2.php?halaman=logout"><?php echo $_SESSION['user_nama']; ?> (Log Out)</a>
	</div>
</div>



