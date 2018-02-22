<!DOCTYPE html>
<html>
<head>
	<title>Binary search</title>
</head>
<body>

	<?php 
	  $a=array ( 1, 10 ,25 ,35,45);
	print_r($a); echo "<br>";
	$n = count($a);

	//let element to be searched be $x
	$x=10;
	echo "$x be the element to be searched<br>";

	binarySearch($a,0,$n-1,$x);

	function binarySearch($a, $f,$l , $x){
		$m=(int)(($f+$l)/2);
		//echo $m;
		if($f<=$l)
		{	
			if($x==$a[$m]){
				echo "Element found at index $m";
				return;
			}
			else if ($x<$a[$m]){
				binarySearch($a,$f,$m-1,$x);
			}
			else{
		 	binarySearch($a,$m+1,$l,$x);
			}

			
		}
		else
			echo "<br>Element not found in list";

	}
  ?>

</body>
</html>