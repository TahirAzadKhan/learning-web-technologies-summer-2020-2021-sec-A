<?php
	if(isset($_REQUEST['submit'])){

		$dob=  $_POST['dob'];

		if($dob == ""){
			echo "Null input";
		}else{
			echo $dob;
		}

	}else{
		echo 'invalid input';
	}


?>