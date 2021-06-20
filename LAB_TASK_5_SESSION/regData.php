<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$userName =$_POST [ 'uname' ];
	$password =$_POST [ 'pword' ];
	$confirmPassword = $_POST [ 'conpword' ];
	if(isset($_POST['radio'])){
			  $gender =  $_POST [ 'gender' ];
			}
    $day    =   $_POST [ 'date'] ;
	  $month  = $_POST [ 'month'];
	  $year   = $_POST [ 'year' ] ;
    $dateOfBirth = [ $day , $month , $year ];



    if ( $name == "" || $email == "" || $userName == "" || $password == "" || $confirmPassword == "" || $gender == "" || empty($dateOfBirth)) {
 	echo "Filled all the file... ";
 }
 elseif ( $password != $confirmPassword) {
 	echo "Password didn't match with confirm Password ";
 }
 else{
 	$user = [	
			                'name'=>$name, 
                      'userName'=>$userName, 
                      'email'=> $email,
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,

						];

	$_SESSION['currentUser'] = $user;
    header('location: Login.html');
 }

}

?>