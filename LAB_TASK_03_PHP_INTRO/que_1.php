<?php
function Area($l, $w) 
{
    $area = $l * $w;
    return $area;
}
function Perimeter($l, $w) 
{
    $perimeter = 2 * ($l + $w);
    return $perimeter;
}
$l = 10;
$w = 20;
echo("Area = ");
echo(Area($l,$w));
echo("\n");
echo("Perimeter = ");
echo(Perimeter($l,$w));


?>
<!DOCTYPE html>
<html>
<head>
	<title>This is PHP Practice</title>
</head>
<body>
	<h1>Problem 1 </h1>
</body>
</html>