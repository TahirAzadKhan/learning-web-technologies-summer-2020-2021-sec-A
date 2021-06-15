<!DOCTYPE html>
<html>

<head>
    <title>Degree</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>GENDER</legend>
            <input type="checkbox" name="Degree" value="<?php if(isset($_REQUEST['Degree'])){ echo $_REQUEST['Degree']; }?>">
            SSC
            <input type="checkbox" name="Degree" value="<?php if(isset($_REQUEST['Degree'])){ echo $_REQUEST['Degree']; }?>">
            HSC
            <input type="checkbox" name="Degree" value="<?php if(isset($_REQUEST['Degree'])){ echo $_REQUEST['Degree']; }?>">
            Bsc
            <input type="checkbox" name="Degree" value="<?php if(isset($_REQUEST['Degree'])){ echo $_REQUEST['Degree']; }?>">
            Msc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>