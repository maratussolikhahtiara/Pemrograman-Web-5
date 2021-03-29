<html>
<head>
	<title></title>
</head>
<body>
	<form methode="POST" action="postActGet.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr> <!-- create rows in the table -->
				<td width="130">Nama</td> <!-- create a cell in the table with name text -->
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td> <!-- create a cell in the table with email text -->
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnlogin" value="Login"> <!-- create input type submit with value login -->
					<input type="reset" name="reset" value="Reset"> <!-- create input type submit with value reset --> 
				</td>
			</tr>
		</table>
	</form>
</body>
</html>