<?php

if(isset($_REQUEST['submit'])){

    $email =  $_REQUEST['email'];

    if($email == ""){
        echo "Null input";
    }else{
        echo $email;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Email</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>