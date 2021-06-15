<!DOCTYPE html>
<html>

<head>
    <title>DOB</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>DOB</legend>
            <input type="date" name="dob" value="<?php if(isset($_REQUEST['dob'])){ echo $_REQUEST['dob']; }?>"> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>