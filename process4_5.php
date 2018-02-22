<?php 
 	$x=$_REQUEST["x"];
 	
 	$y=$_REQUEST["y"];

 	//x^y
    $j=$x;
 	$i=$y;
    $a=1;
 	while($i--){
 		$a=$a*$j;
 		
 	}
 	echo "$x<sup>$y</sup> = $a<br><br>";


 	//x*y

 	$k=$x;
 	$l=$y;
 	$b=0;
 	while($l--){
 		$b=$b+$k;
 	}
    echo "$x * $y = $b";

 	?>
 	