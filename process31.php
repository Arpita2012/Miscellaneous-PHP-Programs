<!DOCTYPE html>
<html>
<head>
	<title>Merge Sort</title>
</head>
<body>

<?php

$a=array ( 1, 0 ,14 ,5,15);
	print_r($a); echo "<br>";
	$n = count($a);

	$a=MergeSort($a, 0 , $n-1);

	echo "<br><br>After Merge sort<br>";
	print_r($a);
	

	function MergeSort( $a, $f , $l){
		if($f<$l){
			$m=(int)(($f+$l)/2); //echo $m."<br>";
			$a=MergeSort($a,$f,$m);
			$a=MergeSort($a,$m+1,$l);
			$a=Merge($a,$f,$m,$m+1,$l);
		}
		//return $a;
	}

	function Merge($a,$f1,$l1,$f2,$l2){
		$b=array();

		$i= $f1;
		$j=$f2;
		$k= $f1;

		while ($i<=$l1 && $j <=$l2) {

			if($a[$i]<$a[$j]){
				$b[$k]= $a[$i];
				$i++; $k++;

			}
			else{
				$b[$k]= $a[$i];
				$j++;
				$k++;
			}
			
		}

		while($i<=$l1){
			$b[$k]=$a[$i];
			$i++; $k++;
		}
		while($j<=$l2){
			$b[$k]=$a[$j];
			$j++; $k++;
		}

		for ($k=$f1; $k < $l2; $k++) { 
			$a[$k]=$b[$k];
			//echo $b[$k]." ";
 
		}//echo "Over <br>";

		return $a;
	}

	?>

</body>
</html>