<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
		if (empty($_POST['nama']) || empty($_POST['email'])){ // melakukan seleksi looping 
		} else if (empty($_POST['email'])) { // melakukan seleksi looping 
		} else { // melakukan seleksi looping
			echo "<center>Nama: ".$_POST['nama']."</center><br>"; // menampilkan teks nama
			echo "<center>Email: ".$_POST['email']."</center><br>"; // menampilkan teks email
			echo "<center>Hari: ".$hari."</center><br>"; // mengatur zona waktu
			echo "<center>Jam: ".$jam."</center><br>"; // menampilkan jam 
			echo "<center>Tanggal Login: ".$tanggal."</center><br>"; // menampilkan waktu 
		}

		?>
	</body>
</html>