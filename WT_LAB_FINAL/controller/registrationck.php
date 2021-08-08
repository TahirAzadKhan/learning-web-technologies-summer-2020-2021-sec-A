<?php
	session_start();
	require_once('../Model/empDB.php');

	if(isset($_POST['submit'])){
        $ename       = $_POST['ename'];
		$cname  = $_POST['cname'];
		$cno 		= $_POST['cno'];
		$uname 	= $_POST['uname'];
		$pass     = $_POST['pass'];
		
        		
		if($ename				== "" ){
			echo "incomplete employer name information...please try again!";}
		else if($cname 		    == "" ){
			echo "incomplete company name information...please try again!";}
		else if($cno 		       == "" ){
			echo "incomplete contact number information...please try again!";}
        else if($uname 			== "" ){
			echo "incomplete username information...please try again!";}
		else if($pass 	    	=== "" ){
			echo "incomplete password information...please try again!";}
        else{

			$emp = [
							'ename'			=>$ename, 
							'cname'		=>$cname, 
							'cno'		=>$cno,
                            'uname'				=>$uname, 
							'pass'	=>$pass
						];

				$status = insertEmp($emp);
                
				
		}
        
    }