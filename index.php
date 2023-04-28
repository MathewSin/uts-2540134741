<?php
	$Uhost = '172.18.0.2';
	$username = 'root';
	$password = 'root';
	$dataB = 'redlock';

	$connected = mysqli_connect($Uhost, $username, $password, $dataB);

	if (!$connected){
		echo "Connection Failed!";
		die();
	}


	$Q = mysqli_query($connected, "SELECT * FROM users");
	$HitungJumlahUser = 0;

	while ($row = mysqli_fetch_array($query)) {
		$HitungJumlahUser+=1;
		
	}

	echo $HitungJumlahUser;
?>
