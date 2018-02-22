<?php 
	$a=$_REQUEST["Ram_age"];
	$b=$_REQUEST["Shayam_age"];
	$c=$_REQUEST["Ghanshayam_age"];

	if ($a<$b&&$a<$c) {

		
		echo "Ram is youngest";

	}
	elseif ($b<$c&&$b<$a) {
		echo "Shayam is youngest";
		# code...
	}
	elseif($c<$b&&$c<$a){
		echo " Ghanshayam is youngest";
	}
	elseif($a==$b&&$a<$c)
	{
		echo "Ram and Shayam are younger than Ghanshayam and have same age";
	}
	elseif($a==$c&&$a<$b)
	{

		echo "Ram and Ghanshayam are younger than Shayam and have same age";
	}
	elseif ($b==$c&&$b<$a) {
		
		echo "Shayam and Ghanshayam are younger than Ram and have same age";
		
	}
	else{
		echo "All are of same age";
	}
	?>

