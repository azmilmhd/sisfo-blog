<?php 

include_once "app/Photos.php";

$photos = new app\Photos();
$rows = $photos->tampil();

?>

<html>

	<head>
	<title></title>
	</head>

<body>
	<div class="utama">
	
	
	<div class="isi">

			<h2 align="center">Data Photos</h2>
			<br>
			
			<thead>
			<table align="center">
				<div>
				<tr>
					<th>NO</th>
					<th>TANGGAL FOTO</th>
					<th>FOTO</th>
					<th>KETERANGAN</th>
					<th>JUDUL</th>
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
					<td><?php echo $row['photo_date']; ?></td>
					<td><img src="Upload/<?php echo $row['photo_title'] ?>" width="100px" height="100px"></td> 
					<td><?php echo $row['photo_text']; ?></td>
					<td><?php echo $row['post_title']; ?></td>
					
					<td width="90px" align="center">
					<a class="edit" href="index2.php?halaman=photos_edit&id=<?php echo $row['photo_id']; ?>">Edit</a>
					<a class ="hapus"  href="index2.php?halaman=photos_proses&delete-id=<?php echo $row['photo_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 


			
			<br>
			

			<div align="center">
			<a href="index2.php?halaman=photos_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>
</div>
</body>
</html>
<link rel="stylesheet"href="<?php echo ASSET; ?>css/style.css">