  
<?php
	if(isset($_REQUEST['submit'])){

		$gender	=  $_REQUEST['gender'];

		if($gender == ""){
			echo "Null input";
		}
        else{
			echo $gender;
		}

	}else{
		echo 'invalid input';
	}


?>