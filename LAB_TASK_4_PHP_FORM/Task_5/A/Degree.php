<?php
	if(isset($_REQUEST['submit'])){

		$Degree	=  $_REQUEST['Degree'];

		if($Degree == ""){
			echo "Null input";
		}else{
			echo $Degree;
		}

	}else{
		echo 'invalid input';
	}


?>