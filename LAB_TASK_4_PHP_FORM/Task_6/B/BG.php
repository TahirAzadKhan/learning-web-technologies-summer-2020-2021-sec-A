<?php

if(isset($_REQUEST['submit'])){

    $BG=  $_REQUEST['BloodGroup'];

    if($BG == ""){
        echo "Null input";
    }else{
        echo $BG;
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
            <legend>BloodGroup :</legend>
            <select name="BloodGroup">
                <option value=""></option>
                <option value="">A+</option>
                <option value="">A-</option>
                <option value="">B+</option>
                <option value="">B-</option>
                <option value="">AB+</option>
                <option value="">AB-</option>
                <option value="">O+</option>
                <option value="">O-p</option>

            </select><br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>