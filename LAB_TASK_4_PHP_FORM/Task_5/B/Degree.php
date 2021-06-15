<?php

if(isset($_REQUEST['submit'])){

    $Degree=  $_REQUEST['Degree'];

    if($Degree == ""){
        echo "Null input";
    }else{
        echo $Degree;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Degree</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>Degree :</legend>
            <input type="checkbox" name="degree"> SSC
            <input type="checkbox" name="degree"> HSC
            <input type="checkbox" name="degree"> Bsc
            <input type="checkbox" name="degree"> Msc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>