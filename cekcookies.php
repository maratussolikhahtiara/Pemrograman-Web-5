<?php
if (isset ($variable_cookies)) { //jika cek nilai variabel cookies
	echo 'Variable Cookiesnya "$variable_cookies" nilainya adalah '. $variable_cookies;
}
else{ // jika tidak menampilkan teks variabel cookies belum diterapkan 
	echo "variable cookies belum diterapkan";
}
?>