<p>Tampilkan urutan angka di bawah ini, menggunakan fungsi perulangan.</p>
<p><b>OUTPUT : </b></p>

<code>
	<?php 
		echo 'angka = ';
		for ($i = 1; $i <= 15; $i++) {
			if ($i % 2 == 1) {
				$angka = $i.', ';
				echo $angka;
			}
		}
	?>	
</code>

<p><b>CODE : </b></p>

<code>
	echo 'angka = ';
		for ($i = 1; $i <= 15; $i++) {
			if ($i % 2 == 1) {
				$angka = $i.', ';
				echo $angka;
			}
		}
</code>