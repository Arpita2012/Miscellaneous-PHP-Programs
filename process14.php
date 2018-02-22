<?php
	$n=$_REQUEST["n"];

	$i=$n;
	$fact = 1;
	while(($i)>0)
		{ $fact=$fact*$i;
			$i--;}
	echo "$n! = $fact";
	?>