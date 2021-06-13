<?php
function Vat($s) 
{
    $vat = $s * (15/100);
    return $vat;
}
$s = 100000;
echo("Vat = ");
echo(Vat($s));
echo("where ");
echo("salary = ");
echo($s);
?>
<!DOCTYPE html>
<html>
<head>
	<title>This is PHP Practice</title>
</head>
<body>
	<h1>Problem 2 </h1>
</body>
</html>