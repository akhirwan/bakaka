<h2>String = “AKU SUKA MAKAN NASI PADANG”</h2>

<h3></h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php 
		$string = "AKU SUKA MAKAN NASI PADANG";
		$expStr = explode(' ',$string);
		$count = count($expStr);

		$ascStr = '';
		for ($i = 0; $i < $count; $i++) {
			$ascStr .= $expStr[$i].', ';
			echo $ascStr.'<br>';
		}

		krsort($expStr);
		$descStr = '';
		foreach ($expStr as $i => $val) {
			$descStr .= $val.', ';
			echo $descStr.'<br>';
		}
	?>	
</code>

<p><b>CODE : </b></p>

<code>
	$string = "AKU SUKA MAKAN NASI PADANG";<br>
	$expStr = explode(' ',$string);<br>
	$count = count($expStr);<br>

	$ascStr = '';<br>
	for ($i = 0; $i < $count; $i++) {<br>
		$ascStr .= $expStr[$i].', ';<br>
		echo $ascStr.'br';<br>
	}<br>

	krsort($expStr);<br>
	$descStr = '';<br>
	foreach ($expStr as $i => $val) {<br>
		$descStr .= $val.', ';<br>
		echo $descStr.'br';<br>
	}
</code>