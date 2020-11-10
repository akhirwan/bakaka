<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BKM SOAL TEST WEB 001</title>

	<link rel="stylesheet" type="text/css" href="css/bukaka.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

<div id="container">
	<h1>BKM SOAL TEST WEB 001</h1>

	<div id="body">
		<div class="menu">
			<ul>
				<li><a href="index.php?soal=1">SOAL 1</a></li>
				<li><a href="index.php?soal=2">SOAL 2</a></li>
				<li><a href="index.php?soal=3">SOAL 3</a></li>
				<li><a href="index.php?soal=4">SOAL 4</a></li>
				<li><a href="index.php?soal=5">SOAL 5</a></li>
			</ul>
		</div>
		<?php 
		if(isset($_GET['soal'])){
			$page = $_GET['soal'];

			switch ($page) {
				case '1':
					include "page/satu.php";
					break;
				case '2':
					include "page/dua.php";
					break;
				case '3':
					include "page/tiga.php";
					break;	
				case '4':
					include "page/empat.php";
					break;	
				case '5':
					include "page/lima.php";
					break;			
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "page/satu.php";
		}

		?>
	</div>

	<p class="footer"></p>
</div>

</body>
</html>