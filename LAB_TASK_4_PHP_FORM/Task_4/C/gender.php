<!DOCTYPE html>
<html>

<head>
    <title>GENDER</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="<?php if(isset($_REQUEST['gender'])){ echo $_REQUEST['gender']; }?>">
            Male
            <input type="radio" name="gender" value="<?php if(isset($_REQUEST['gender'])){ echo $_REQUEST['gender']; }?>">
            Female
            <input type="radio" name="gender" value="<?php if(isset($_REQUEST['gender'])){ echo $_REQUEST['gender']; }?>">
            Other
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>