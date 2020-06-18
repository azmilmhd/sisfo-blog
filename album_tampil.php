<?php 
include_once "app/Album.php";
$album = new app\Album();
$rows = $album->tampil();
?>

<html>
	<head>
	<title></title>
	</head>
<body>
	<div class="utama">
	<div class="isi">
			<h2 align="center">DATA ALBUM</h2>
			<br>
			<thead>
			<table align="center">
				<div class="tr1">
				<tr>
					<th>NO</th>
					<th>NAMA ALBUM</th>
					<th>KETERANGAN</th>
					<th>FOTO KETERANGAN</th>
					<th>AKSI</th>
				</tr> 
				</div>
			</thead>
				<?php 
				$no = 1;
				?>
				<?php foreach ($rows as $row) { ?>
			<tbody>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $row['album_name']; ?></td>
					<td><?php echo $row['album_text']; ?></td>
					<td><?php echo $row['photo_id']; ?></td>
					<td align="center">
					<a class="edit" href="index2.php?halaman=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a>
					<a class ="hapus" href="index2.php?halaman=album_proses&delete-id=<?php echo $row['album_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 
			<br>
			<div align="center">
				<a href="index2.php?halaman=album_input">
				<button class="input">Tambah</button>
				</a>
			</div>
</div>
</body>
</html>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/style.css">