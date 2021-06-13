  
<?php
$array = [ [ "1" , "2" ,"3" ,"A" ],
           [ "1" , "2" ,"B" ,"C" ],
           [ "1" , "D" ,"E" ,"F" ]  
         ];
$count = 3;
for ( $row = 0 ; $row != 3 ; $row ++ ) { 
	for ( $column = 0 ; $column < $count  ; $column ++ ) {
        
         echo $array[$row][$column] ;
         
	}
	$count-- ;
	echo "\n <br>";
}
echo "\n \n <br> <br>";


$count = 3;
for ( $row = 0 ; $row != 3 ; $row ++ ) { 
	for ( $column = $count ; $column <= 3  ; $column ++ ) {
        
         echo $array[$row][$column] ;
         
	}
	$count -- ;

	echo "\n <br>";
}


?>