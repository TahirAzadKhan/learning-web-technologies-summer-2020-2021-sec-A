<?php
$star = "*" ;
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
         echo $star;
	}
	echo " <br>";
}
echo " <br>";
$star = 1;
for ( $row = 3 ; $row != 0 ; $row -- ) { 
	for ($column = 0 ; $column < $row  ; $column ++ ) {
        
         echo $star ;
         $star++ ;
	}
	$star = 1 ;
	echo " <br>" ;
}

echo " <br> ";

$count=0;
$array = [ "A" , "B" , "C" , "D" , "E" , "F"];
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
        echo "$array[$count]" ;
        $count++;

 

}
	echo " <br>";
}
echo " <br>";
?>