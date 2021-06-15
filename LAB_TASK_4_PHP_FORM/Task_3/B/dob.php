<?php

if(isset($_REQUEST['submit'])){

    $dob=  $_REQUEST['dob'];

    if($dob == ""){
        echo "Null input";
    }else{
        echo $dob;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>DOB</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="dob" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>