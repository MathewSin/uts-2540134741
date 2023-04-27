<?php
	$host = '172.18.0.2';
	$user = 'root';
	$pass = 'root';
	$db = 'redlock';

	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn){
		echo "Connection Failed!";
		die();
	}


	$query = mysqli_query($conn, "SELECT * FROM users");

	while ($row = mysqli_fetch_array($query)) {
		echo "ID: " . $row['ID'] . " Nama: " . $row['nama'] . " Alamat: " . $row['alamat'] . " Jabatan: " . $row['Jabatan'] . "<br>";
	}
?>
