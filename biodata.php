<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
</head>
<body>
	<form method="POST" action="isi_biodata.php">
		<h2> Input your biodata  </h2> <!-- Menampilkan teks -->
		<table width="600"  cellpadding="2" cellspacing="2">  <!--membuat tabel -->
			<tr> <!--membuat baris pada tabel -->
				<td width="130">Nama </td> 
				<td><input type="text" name="nama"></td> <!-- output : nama -->
			</tr>
			<tr>
				<td width="130">NPM</td> 
				<td><input type="text" name="npm"></td> <!-- output : npm -->
			</tr>
			<tr>
				<td width="130">Tempat dan Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td> <!-- output : ttl -->
			</tr>
			<tr>
				<td width="130">Email</td> 
				<td><input type="text" name="email"></td> <!-- output : email -->
			</tr>
			<tr>
				<td width="130">Alamat</td> 
				<td><input type="text" name="alamat"></td> <!-- output : alamat -->
			</tr>
			<tr>
				<td width="130">Prodi</td>
				<td><input type="text" name="prodi"></td><!-- output : prodi -->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"> <!-- membuat input type submit dengan value login-->
					<input type="reset" name="reset" value="Reset"> <!-- membuat input type reset dengan value Reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>