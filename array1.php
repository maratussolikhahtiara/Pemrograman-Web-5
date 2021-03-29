<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<?php 
	// cara untuk menuliskan array bisa seperti dibawah ini 
	$nama[] = "Wulan Sari";//variabel $nama dengan array 
	$nama[] = "Maratus Solikhah"; //variabel $nama dengan array 
	$nama[] = "Tiara";//variabel $nama dengan array 
	echo $nama[1] . $nama[2] . $nama[0]; //menampilkan teks nilai variabel nama indeks ke 1, nilai variabel nama indeks ke 2, nilai variabel nama indeks ke 0 
	echo "<br>"; 
	
	$jum_array = count($nama); 
	echo "jumlah elemen array = " . $jum_array; 
	
	?>
</body>
</html>