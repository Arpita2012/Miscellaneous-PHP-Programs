<!DOCTYPE html>
<html>
<head>
	<title>Insertion sort</title>
</head>
<body>
	<?php

	
	
	
	$a=array ( 1, 0 ,25 ,5,15);
	print_r($a); echo "<br>";
	$n = count($a);

	//$j;$t;

	for ($k=1; $k <$n ; $k++) { 

		$t=$a[$k];
		//echo $t;
		$j=($k-1);

		while ($j>=0 && $t<$a[$j]) {
		 $a[$j+1]=$a[$j];
		 $j=$j-1;

		}
		$a[$j+1]=$t;
		echo "<br>iteration $k <br>";
		print_r($a);

	}
    echo "<br>array after insertion sort";
    print_r($a);

	

	?>
</body>
</html>




