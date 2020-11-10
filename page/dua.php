<h2>2020-05-01</h2>

<h3>a. Ubah format tanggal di atas menjadi 05-20-01 menggunakan substring</h3>
<p><b>OUTPUT : </b></p>

<code id="date"></code>
<script>
	var str = "2020-05-01";
	var y = str.substring(2, 4);
	var m = str.substring(5, 7);
	var d = str.substring(8, 10);
	document.getElementById("date").innerHTML = m+'-'+y+'-'+d;
</script>

<p><b>CODE : </b></p>

<code>
	id = date; <br>
	var str = "2020-05-01"; <br>
	var y = str.substring(2, 4); <br>
	var m = str.substring(5, 7); <br>
	var d = str.substring(8, 10); <br>
	document.getElementById("date").innerHTML = m+'-'+y+'-'+d;
</code>

<h3>b. Ubah format tanggal di atas menjadi 05-20-01 menggunakan format date php</h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php
		$date = date_create("2020-05-01");
		echo date_format($date,"m-y-d");
	?>
</code>

<p><b>CODE : </b></p>

<code>
	$date = date_create("2020-05-01");
	echo date_format($date,"m-y-d");
</code>

<h3>c. Tampilkan 6 bulan kedepan dari tanggal di atas</h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php
		$date = "2020-05-01"; 
		echo date('Y-m-d', strtotime($date. ' + 6 months')); 
	?>
</code>

<p><b>CODE : </b></p>

<code>
	$date = "2020-05-01"; 
	echo date('Y-m-d', strtotime($date. ' + 6 months'));
</code>

<h3>d. Berapa umur anda jika dihitung dari tanggal di atas</h3>
<p><b>OUTPUT : </b></p>

<code>
	<?php
		$birthDate = date('2020-05-01');
		$now = date('Y-m-d');
		$age = strtotime($now) - strtotime($date);
		echo "Age is : " . $age;
	?>
</code>

<p><b>CODE : </b></p>

<code>
	birthDate = date('2020-05-01'); <br>
	$now = date('Y-m-d'); <br>
	$age = strtotime($now) - strtotime($date); <br>
	echo "Age is : " . $age;
</code>

