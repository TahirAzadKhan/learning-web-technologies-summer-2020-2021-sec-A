<?php

if(isset($_REQUEST['submit'])){

    $gender=  $_REQUEST['gender'];

    if($gender == ""){
        echo "Null input";
    }else{
        echo $gender;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gender</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>Gender :</legend>
            <input type="radio" name="gender"> Male
            <input type="radio" name="gender"> Female
            <input type="radio" name="gender"> Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>