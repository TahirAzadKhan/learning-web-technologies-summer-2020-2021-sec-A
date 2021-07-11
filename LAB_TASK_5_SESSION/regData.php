<?php
 
    
 
if ( isset ( $_POST [ 'submit' ] ) ) {
 
   $name = $_POST [ 'name' ];
   $email =$_POST [ 'email' ];
   $username =$_POST [ 'username' ];
   $password =$_POST [ 'password' ];
   $confirmpassword = $_POST [ 'confirmpassword' ];
    $gender =  $_POST [ 'gender' ];
    $category = $_POST['category'];
 
      if ( $name == "" || $email == "" || $username == "" || $password == "" || $confirmpassword == ""|| $gender == "" ||$category == "") {
                  echo 'field is empty please Fill up the form properly <a href="registration.html">Reload Registration Form</a> ';
            }
            elseif(str_word_count($name)<2){
         echo "name type is invalid ";
      }
      elseif ( $password != $confirmpassword) {
                  echo "Password didn't match with confirm Password ";
             }
 
  
   
      elseif(strlen($password)<8)
      {
               echo 'Password must not be less than eight (8) characters <a href="registration.html">Go Back</a>';
      }
 
      elseif(strlen($_POST['password'])>=8)
      {
         $checkpass = false;
            for ($i=0; $i < strlen($_POST['password']); $i++) 
            { 
                  if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
                  {
                     $checkpass = true;
                     break;
                  
                   }
         }
      if ($checkpass === false)
      {
         echo 'Password must contain at least one of the special characters (@, #, $, %) <a href="registration.html">Go Back</a>';
 
      }
      else{
         $user = $username."|".$password."|".$email."|".$name."|".$gender."|".$category;
         echo "error";
         $file=fopen('users.txt', 'w');
         fwrite($file, $user);
         fclose($file);
         
         
         header('location: Login.html');
      }
     }
 
 


 
}
 
?>