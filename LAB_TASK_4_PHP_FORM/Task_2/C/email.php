<!DOCTYPE html>
<html>

<head>
    <title>Email</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email" value="<?php if(isset($_REQUEST['email'])){ echo $_REQUEST['email']; }?>"> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>