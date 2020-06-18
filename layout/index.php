<!DOCTYPE html>
<html>	
<head>
	<title>InstoGram</title>
</head>
<body>
	<div class="header">
		<?php include "header.php"; ?>
		
		<?php include "navbar.php"; ?>
	</div>

	<div class="isimenu">
		
		<?php 
			if (isset($_GET['halaman'])) 
			{
				include $_GET['halaman'] . ".php";
			}else {
				include "awal.php";
			}
		 ?>
		</div>
</body>
</html> 

<link rel="stylesheet" type="text/css" href="../layout/assets/css/style.css">