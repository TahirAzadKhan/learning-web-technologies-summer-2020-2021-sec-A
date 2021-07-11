<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
	
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		

		if($username == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			
				
				$user = [
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password,
							'type'		=>'user',
              'id'   => '2'
						];

				$status = updateUser($user);

				if($status){
					header('location: ../view/home.php');
				}else{
					echo "Db error";
				}

		
		}
	}
?>