<!DOCTYPE html>
<html>
<head>
	<title>Belajar Dasar Pemrograman Web | Submission</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/bukaka.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<!-- 
Author : Akhirwan Novendi
-->
	<aside>
		<figure>
			<div id="avatar"></div>
			<figcaption>Akhirwan Novendi</figcaption>
		</figure>
		<img src="assets/menu.png">
		<nav>
			<ul class="active">
				<li><a href='index.php?hal=home'>Home </a></li>
				<li><a href='index.php?hal=about'>About Me </a></li>
				<li><a href='index.php?hal=skill'>Skill </a></li>
				<li><a href='index.php?hal=contact'>Contact </a></li>
			</ul>
		</nav>
	</aside>
	<main>
		<?php 
		if(isset($_GET['hal'])){
			$page = $_GET['hal'];

			switch ($page) {
				case 'home':
					include "page/home.php";
					break;
				case 'about':
					include "page/about.php";
					break;
				case 'skill':
					include "page/skill.php";
					break;		
				case 'contact':
					include "page/contact.php";
					break;			
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}else{
			include "page/home.php";
		}

		?>
		<a href="https://drive.google.com/file/d/1GEhvUq2VeGUM0BggXyL5hnzBMOvSgHLM/view?usp=sharing" class="cta">my portfolio</a>
	</main>
	
	<script>
    	(function() {
			var menu = document.querySelector('ul'),
				menulink = document.querySelector('img');
                
			menulink.addEventListener('click', function(e) {
				menu.classList.toggle('active');
				e.preventDefault();
			});
		})();
    </script>
</body>
</html>