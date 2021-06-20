<?php


  session_start();
if ( isset ( $_POST [ 'submit' ] ) ) {

	$userName =  $_POST [ 'username' ];
	$password =   $_POST [ 'password' ];

	
	
    if ($userName == "" && $password == "") {
    	echo "Please fill the blanks";
    }
	else{
		 $user = $_SESSION['currentUser'] ;

		 if ( $password == $user ['password'] && $userName == $user ['userName'] ) {
		 	header('location: dashboard.html');
		 }
		 else{
		 	echo "Password and Username didn't match";
		 }
	}
   
}


?>