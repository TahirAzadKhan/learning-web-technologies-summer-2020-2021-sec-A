<?php
	if(isset($_REQUEST['submit'])){

		$DOB=  $_POST['dob'];

		if($DOB == ""){
			echo "Null input";
		}else{
			echo $DOB;
		}

	}else{
		echo 'invalid input';
	}


?>