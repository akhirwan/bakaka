<h2>[20,10,100,30,15,5]</h2>

<h3>a. urutkan array tersebut (asc dan desc).</h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php 
		$array = [20,10,100,30,15,5];
		sort($array);

		echo 'asc = ';
		foreach ($array as $a => $arr) {
			echo $arr.', ';
		}

		rsort($array);

		echo '<br>desc = ';
		foreach ($array as $a => $arr) {
			echo $arr.', ';
		}
	?>	
</code>

<p><b>CODE : </b></p>

<code>
	$array = [20,10,100,30,15,5]; <br>
	sort($array); <br>

	echo 'asc = '; <br>
	foreach ($array as $a => $arr) { <br>
		echo $arr.', '; <br>
	} <br>

	rsort($array); <br>

	echo 'desc = '; <br>
	foreach ($array as $a => $arr) { <br>
		echo $arr.', '; <br>
	}
</code>

<h3>b. tambahkan angka 180 di posisi terakhir pada array di atas</h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php 
		$array = [20,10,100,30,15,5];
		array_push($array, 180);

		echo 'array = ';
		foreach ($array as $a => $arr) {
			echo $arr.', ';
		}
	?>	
</code>

<p><b>CODE : </b></p>

<code>
	$array = [20,10,100,30,15,5]; <br>
	array_push($array, 180); <br>

	echo 'array = '; <br>
	foreach ($array as $a => $arr) { <br>
		echo $arr.', '; <br>
	}
</code>

<h3>c. hapus angka 30 pada array di atas</h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php 
		$array = [20,10,100,30,15,5];
		$array = array_diff($array, [30]);

		echo 'array = ';
		foreach ($array as $a => $arr) {
			echo $arr.', ';
		}
	?>	
</code>

<p><b>CODE : </b></p>

<code>
	$array = [20,10,100,30,15,5]; <br>
	$array = array_diff($array, [30]); <br>

	echo 'array = '; <br>
	foreach ($array as $a => $arr) { <br>
		echo $arr.', '; <br>
	} <br>
</code>