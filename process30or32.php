<!DOCTYPE html>
<html>
<head>
	<title>Bubble sort</title>
</head>
<body>

<?php
	$a=array ( 1, 0 ,14 ,5,15);
	print_r($a); echo "<br>";
	$n = count($a);

	for ($i=0; $i <$n ; $i++) { 
		for ($j=0; $j <$n-$i-1 ; $j++) { 
			if($a[$j]>$a[$j+1]){
				$temp = $a[$j];
				$a[$j] = $a[$j+1];
				$a[$j+1]=$temp;

			}
		}

			echo "<br> iteration $i <br>";
			print_r($a);
	}




	echo "<br><br>After Bubble sort";
	print_r($a);

	?>

</body>
</html>