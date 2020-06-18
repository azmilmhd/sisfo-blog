<?php 

include_once "app/Controller.php";
include_once "app/Post.php";

$post = new app\Post();

if ($_POST['simpan']){
	$post->tambah();
	header("location:index2.php?halaman=post_tampil");
}

if ($_POST['edit']){
	$post->update();
	header("location:index2.php?halaman=post_tampil");
}


if ($_GET['delete-id']) {
	$post->hapus($_GET['delete-id']);
	header("location:index2.php?halaman=post_tampil");
}

?>