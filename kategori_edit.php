<?php 
include_once "app/Kategori.php";
$id = $_GET['id'];
$kategori = new app\Kategori();
$row = $kategori->edit($id);
?>


<html>
<head>
	<title></title>
</head>
<body>
	<div class="utama">
	<div class="isi">
		<h2 align="center">EDIT DATA KATEGORI</h2>
		<form action="kategori_proses.php" method="POST">
		<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
		<table align="center">
			<tr><td>Nama Kategori</td></tr>
			<tr>
			<td><input class="nama" type="text" name="cat_nama" value="<?php echo $row['cat_nama']; ?>"></td>
		    </tr>

		    <tr><td>Keterangan</td></tr>
		    <tr>
			<td><input class="ket" type="textarea" name="cat_ket" value="<?php echo $row['cat_text']; ?>"></td>
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



</style>