<!DOCTYPE html>
<html>

<head>
    <title>Name</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name" value="<?php if(isset($_REQUEST['name'])){ echo $_REQUEST['name']; }?>"> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>