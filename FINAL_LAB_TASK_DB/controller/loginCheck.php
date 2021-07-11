<?php
	session_start();
	require_once('../model/userModel.php');
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			//$user = $_SESSION['abc'];

			$status = validateUser($username, $password);
				
			if($status){
				$_SESSION['status'] = true;
				$_SESSION['username'] = $username;
				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}
?>