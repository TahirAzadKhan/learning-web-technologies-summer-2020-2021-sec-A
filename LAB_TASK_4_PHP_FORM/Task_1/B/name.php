<?php

if(isset($_REQUEST['submit'])){

    $name=  $_REQUEST['name'];

    if($name == ""){
        echo "Null input";
    }else{
        echo $name;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Name</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>