<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-image: url(bg.jpg);
		}
		.home{
			text-align: center;
			margin-top: 200px;
			color: whitesmoke;
		}
		.tombol{
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.tombol1{background-color:lightgrey;}
	</style>
</head>
<body>
<div class="home">
	<?php
	echo "<head><title>Peserta eSport Dota 2</head></title>";
	$fp = fopen("data.txt", "a+");

	$nama = $_POST['nam'];
	$nim = $_POST['ni'];
	$asal = $_POST['sal'];
	$jenisk = $_POST['j'];
	$agama = $_POST['ag'];
	$eval = $_POST['ev'];
	


	fputs($fp,"$nama|$nim|$asal|$jenisk|$agama|$eval\n");
	fclose($fp);

	echo "<h1>Terima Kasih Atas Partisipasi Anda</h1> <br>";
	?>
	<button class="tombol tombol1"><a align="center" href="tabel.php">Hasil rekap</a></button>

	
</div>
</body>
</html>