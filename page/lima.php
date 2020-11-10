<h2>$buah</h2>
<p>
	$buah = [
		["NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"],
		["NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"],
		["NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"],
		["NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"],
		["NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"],
		["NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"]
		];
</p>

<h3>a. Buat program untuk menambahkan buah Pisang yang harganya 5000 dan rasanya
manis. ke variabel buah dan tampilkan Nama Buah dengan urutan secara descending</h3>
<p><b>OUTPUT : </b></p>

<code>
	<button onclick="myFunction()">Add Array</button>
	<p id="fruit"></p>
	<script>
		var orange = ["JERUK", 5000, "ASAM"];
		var manggo = ["MANGGA", 20000, "MANIS"];
		var apple = ["APEL", 5000, "MANIS"];
		var durian = ["DURIAN", 50000, "MANIS"];
		var duku = ["DUKU", 10000, "ASAM"];
		var jack = ["NANAS", 5000, "ASAM"];
		var fruits = [orange, manggo, apple, durian, duku, jack];
		document.getElementById("fruit").innerHTML = fruits;

		function myFunction() {
			var banana = ["PISANG", 5000, "MANIS"];
			fruits.push(banana);
			document.getElementById("fruit").innerHTML = fruits;
		}
	</script>
</code>

<p><b>CODE : </b></p>

<code>
	id="fruit"; <br> <br>
	var orange = ["JERUK", 5000, "ASAM"]; <br>
	var manggo = ["MANGGA", 20000, "MANIS"]; <br>
	var apple = ["APEL", 5000, "MANIS"]; <br>
	var durian = ["DURIAN", 50000, "MANIS"]; <br>
	var duku = ["DUKU", 10000, "ASAM"]; <br>
	var jack = ["NANAS", 5000, "ASAM"]; <br>
	var fruits = [orange, manggo, apple, durian, duku, jack]; <br>
	document.getElementById("fruit").innerHTML = fruits; <br>

	function myFunction() { <br>
		var banana = ["PISANG", 5000, "MANIS"]; <br>
		fruits.push(banana); <br>
		document.getElementById("fruit").innerHTML = fruits; <br>
	}
</code>

<h3>b. Buat program untuk menampilkan Nama Buah yang nama buahnya mengandung Huruf "K"</h3>
<p><b>OUTPUT : </b></p>

<code>
	<button onclick="myFunction()">Add Array</button>
	<p id="fruit2"></p>
	<script>
		var orange = ["JERUK", 5000, "ASAM"];
		var manggo = ["MANGGA", 20000, "MANIS"];
		var apple = ["APEL", 5000, "MANIS"];
		var durian = ["DURIAN", 50000, "MANIS"];
		var duku = ["DUKU", 10000, "ASAM"];
		var jack = ["NANAS", 5000, "ASAM"];
		var fruits = [orange, manggo, apple, durian, duku, jack];
		document.getElementById("fruit").innerHTML = fruits;

		function myFunction() {
			var banana = ["PISANG", 5000, "MANIS"];
			fruits.push(banana);
			document.getElementById("fruit2").innerHTML = fruits;
		}
	</script>
</code>

<p><b>CODE : </b></p>

<code>
	id="fruit"; <br> <br>
	var orange = ["JERUK", 5000, "ASAM"]; <br>
	var manggo = ["MANGGA", 20000, "MANIS"]; <br>
	var apple = ["APEL", 5000, "MANIS"]; <br>
	var durian = ["DURIAN", 50000, "MANIS"]; <br>
	var duku = ["DUKU", 10000, "ASAM"]; <br>
	var jack = ["NANAS", 5000, "ASAM"]; <br>
	var fruits = [orange, manggo, apple, durian, duku, jack]; <br>
	document.getElementById("fruit").innerHTML = fruits; <br>

	function myFunction() { <br>
		var banana = ["PISANG", 5000, "MANIS"]; <br>
		fruits.push(banana); <br>
		document.getElementById("fruit").innerHTML = fruits; <br>
	}
</code>