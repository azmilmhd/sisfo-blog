<?php 

include_once "app/Post.php";

$post = new app\Post();
$rows = $post->tampil();

?>


<html>

	<head>
	<title></title>
	<link rel="stylesheet"href="<?php echo ASSET; ?>css/style.css">
	</head>

<body>
	<div class="utama">
	<div class="isi">

			<h2 align="center">DATA POST</h2>
			<br>
			
			<thead>
			<table align="center">
				<div class="tr1">
				<tr>
					<th>No</th>
					<th>Id Kategori</th>
					<th>Tanggal Post</th>
					<th>Slug</th>
					<th>Judul</th>
					<th>Keterangan</th>
					<th>Aksi</th>
					
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
					<td><?php echo $row['cat_id']; ?></td>
					<td><?php echo $row['post_date']; ?></td>
					<td><?php echo $row['post_slug']; ?></td>
					<td><?php echo $row['post_title']; ?></td>
					<td><?php echo $row['post_text']; ?></td>
					<td width="90px" align="center">
					<a class="edit" href="index2.php?halaman=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a>
					<a class ="hapus"  href="index2.php?halaman=post_proses&delete-id=<?php echo $row['post_id']; ?>">Hapus</a>
					</td>
				</tr>
			</tbody>
			<?php } ?>

			</table> 


			
			<br>
			

			<div align="center">
			<a href="index2.php?halaman=post_input">
			<button class="input">Tambah</button>
			</a>
			</div>
			<br>
			

</div>



</body>

</html>