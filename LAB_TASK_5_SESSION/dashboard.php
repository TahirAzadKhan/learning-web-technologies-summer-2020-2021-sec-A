<?php

    session_start();
    $user = $_SESSION['currentUser'] ;
    $userName = $user ['userName'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  <fieldset>
    
      <table>
        <tr>
          <td align="left"><img src="./img/logo.png" alt="" srcset=""></td>
          
          <td ><span ><p>Logged in as<a href="dashboard.html"><?php echo $userName ?>|</a></p>
            <a href="login.html">Logout</a>
            </span></td>
        </tr>
      </table>
    
  </fieldset>
  <fieldset>
    <h3>Account</h3>
    <hr>
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="viewProfile.html">View Profile</a></li>
      <li><a href="editProfile.html">Edit Profile</a></li>
      <li><a href="profilePicture.html">Change Profile Picture</a></li>
      <li><a href="changePassword.html">Change Password</a></li>
      <li><a href="login.html">Logout</a></li>
    </ul>
  </fieldset>
  
  <fieldset>
    <h3>Welcome <?php echo $userName ?> </h3>
  </fieldset>
 
  <fieldset>
    
        <p align="center">Copyright &#169;2017</p>
      
  </fieldset>
</body>
</html>