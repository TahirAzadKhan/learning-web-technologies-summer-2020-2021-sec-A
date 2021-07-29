<?php

	$email = $_POST['email'];

	if($email == null){
		echo 'invalid data';
	}else{
		echo "Valid data: ".$email;	
		$conn = mysqli_connect('localhost', 'root', '', 'email_db');
		$sql = "insert into email_db values('$email')"; 
		$result = mysqli_query($conn, $sql);	
	}

?> 