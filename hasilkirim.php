<?php
if (empty($_POST['nama'])) { 
	header("location:kosong.php"); //browser akan me-redirect ke halaman kosong.php
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>"; 
}
?>