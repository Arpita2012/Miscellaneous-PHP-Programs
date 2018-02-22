<?php 
	$a=$_REQUEST["n1"];
	$b=$_REQUEST["n2"];
	$c=$_REQUEST["n3"];

	if ($a>=$b&&$a>=$c) {
		echo "$a is largest";

	}
	elseif ($b>=$c&&$b>=$a) {
			echo "$b is largest";
	}
	elseif($c>=$b&&$c>=$a){
			echo "$c is largest";
	}
	/*else{
		echo "All are equal";
	}*/
	?>