<?php

	require_once('../model/empDB.php');
	
	if(isset($_GET['not'])){
        
		$uname  = $_GET['uname'];
		
		
		if($uname				== "" ){
			echo "incomplete username information...please try again!";}
        else{
            
				$status = deleteEmp($uname);
                
				
		}
	}
?>