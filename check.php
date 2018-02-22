<?php 


$a=array ( 1, 2 ,2 ,2,2);
	print_r($a); echo "<br>";
	$n = count($a);

	$a=recur($a,4);
	echo "return";

	print_r($a);

	function recur($a,$x){
		if($x<0)
			return $a;
		else {
			$a[$x]=$a[$x]+2;
			print_r($a);echo "<br>";
			$a=recur($a, ($x-1));
			return $a;
		}
	}