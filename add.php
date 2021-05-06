<html>
<head>
	<title>Tambah User Data</title>
</head>

<body>
	<a href="index.php">Kembali</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="name" require></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" require></td>
			</tr>
			<tr> 
				<td>No. Telp</td>
				<td><input type="text" name="mobile" require></td>
			</tr>
			<tr> 
				<td></td>
				<td><br><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "Data berhasil ditambahkan. <a href='index.php'>Lihat data</a>";
	}
	?>
</body>
</html>