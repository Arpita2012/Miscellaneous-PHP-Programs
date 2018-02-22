<!DOCTYPE html>
<html>
<head>
	<title>Selection sort</title>
</head>
<body>

	<?php

	$a=array ( 1, 0 ,25 ,5,15);
	print_r($a); echo "<br>";
	$n = count($a);

	for ($i=0; $i <$n ; $i++) { 
		$min = $a[$i];
		$loc = $i;

		for ($j=$i+1; $j < $n ; $j++) { 
			if($a[$j]< $min){
				$min = $a[$j];
				$loc= $j;
			}
		
		}
			if($loc != $i){
				$temp = $a[$i];
				$a[$i]= $a[$loc];
				$a[$loc] = $temp;
			}

		echo "<br> iteration $i <br>";
			print_r($a);

	}
	echo "<br><br>After selection sort";
	print_r($a);

	?>

</body>
</html>