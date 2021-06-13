<?php
$array = [ "T" , "A" , "H" , "I" , "R"  ] ;

$find = "A" ;
$count = 0 ;

for ($i = 0 ; $i < count($array) ; $i ++ ) { 
	if( $array [ $i ] === $find ){
		echo $find. " is in index number " .$i. " <br>";
		$count = $count + 1 ;
	}
		}
		if ($count === 0) {
			 echo  "Couldn't find  <br>";
		}
?>