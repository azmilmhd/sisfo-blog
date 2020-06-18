<?php 

include_once "app/Controller.php";
include_once "app/Kategori.php";

$kategori = new app\Kategori();

if ($_POST['simpan']){
	$kategori->tambah();
	header("location:index2.php?halaman=kategori_tampil");
}

if ($_POST['edit']){
	$kategori->update();
	header("location:index2.php?halaman=kategori_tampil");
}


if ($_GET['delete-id']) {
	$kategori->hapus($_GET['delete-id']);
	header("location:index2.php?halaman=kategori_tampil");
}

?>