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
	$HitungJumlahUser = 0;

	while ($row = mysqli_fetch_array($query)) {
		$HitungJumlahUser+=1;
		
	}
	echo $HitungJumlahUser;
?>
