<?php
$nama = $_GET['nama']"
$email = $_GET['email']"

if ($nama == ") { 
	echo '<meta http-equiv="refresh" content="1; http://localhost/PEMWEB5/redirecttugas.php">';
} elseif ($email == ") { 
	echo '<meta http-equiv="refresh" content="1; http://localhost/PEMWEB5/redirecttugas.php">';
} else { 
	echo "<center>Nama :".$nama." </center><br>";
	echo "<center>Email :".$email."</center><br>";
date_default_timezone_set('Asia/Jakarta);
	echo "<center>Tanggal : ".date("d-F-Y, H:i:s:a")."</center><br>";
	echo "<center>Tanggal Login	 : ".date("d-F-Y")."</center><br>";
	echo'<meta http-equiv="refresh" content="3; http://localhost/PEMWEB5/biodata.php">';
?>