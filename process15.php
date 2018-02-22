<?php
 	$n=$_REQUEST["n"];
 	
 	$m=$_REQUEST["m"];


    $j=$n;
 	$i=$m;
    $a=1;
 	while($i--){
 		$a=$a*$j;
 		
 	}
 	echo "$n<sup>$m</sup> = $a<br><br>";

 	?>