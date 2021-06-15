<?php
	if(isset($_REQUEST['submit'])){

		$BloodGroup=  $_REQUEST['BloodGroup'];

		if($BloodGroup == ""){
			echo "Null input";
		}
        else if($BloodGroup == "A+"){
			echo "Success";
		}
        else if($BloodGroup == "A-"){
			echo "Success";
		}
        else if($BloodGroup == "B+"){
			echo "Success";
		}
        else if($BloodGroup == "B-"){
			echo "Success";
		}

        else if($BloodGroup == "AB+"){
			echo "Success";
		}
        else if($BloodGroup == "AB-"){
			echo "Success";
		}
        else if($BloodGroup == "O+"){
			echo "Success";
		}
        else if($BloodGroup == "O-"){
			echo "Success";
		}

	}
    else{
		echo 'invalid ';
	}


?>