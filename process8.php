<?php
	$a = $_REQUEST["year"];
	if($a%4)
		echo "$a is not a leap year";
	else
		echo "$a is leap year";
?>