<?php
	
	echo "Armstrong numbers between 1- 500 are<br><br>";

	

	for ($n=1; $n <= 500 ; $n++) { 
		$a=$n;
		$k=$n;
		$sum=0;
		while ($a!=0) {
			$rem = $a%10;
			$sum=$sum+$rem*$rem*$rem;
			//echo "sum $sum";
			$a=$a/10;
		}
		if($sum==$k)
			echo "$k<br><br>";

	}

	?>