<?php
	$n=$_REQUEST["n"];

	$x=1;

	for ($i=1; $i <= $n; $i++) {

		for ($k=($n-$i); $k >=0 ; $k--) { 
			echo " &nbsp ";
		}



		for ($j=1; $j <= $i; $j++) { 
			echo " $x  ";
			$x++;
			
		}
		echo "<br>";
	}

	?>