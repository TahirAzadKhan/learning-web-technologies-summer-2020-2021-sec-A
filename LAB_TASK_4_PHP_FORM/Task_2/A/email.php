<?php
	if(isset($_REQUEST['submit'])){

		$email	=  $_REQUEST['email'];

		if($email == ""){
			echo "Null input";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request...';
	}


?>