<?php
	if(isset($_REQUEST['submit'])){

		$name =  $_REQUEST['name'];

		if($name == " "){
			echo "Null input";
		}else{
			echo "Name: ".$_REQUEST['name'];
		}

	}else{
		echo 'invalid request';
	}


?>