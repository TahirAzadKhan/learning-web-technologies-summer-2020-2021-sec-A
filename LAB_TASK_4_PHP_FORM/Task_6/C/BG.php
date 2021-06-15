<!DOCTYPE html>
<html>

<head>
    <title>BG</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>BloodGroup :</legend>
            <select name="BloodGroup">
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>"></option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">A+</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">A-</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">B+</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">B-</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">AB+</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">AB-</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">O+</option>
                <option value="<?php if(isset($_POST['Degree'])){ echo $_POST['Degree']; }?>">O-p</option>

            </select><br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>