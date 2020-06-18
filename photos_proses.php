<?php 

include_once "app/Controller.php";
include_once "app/Photos.php";

$photos = new app\Photos();

if ($_POST['simpan']){
	$photos->tambah();
	
}

if ($_POST['edit']){
	$photos->update();
	header("location:index2.php?halaman=photos_tampil");
}


if ($_GET['delete-id']) {
	$photos->hapus($_GET['delete-id']);
	header("location:index2.php?halaman=photos_tampil");
}

?>