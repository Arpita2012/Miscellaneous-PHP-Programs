<!DOCTYPE html>
<html>
<head>
	<title>Array combination</title>
</head>
<body>

<?php
 function AlternateCombination( $arr1 , $arr2){
 	$arr = array();
 	$size1=count($arr1);
 	$size2 = count($arr2);

 	for ($i=0,$j=0,$k=0; $i <($size1+$size2) ; $i++) { 
 		if($i%2 == 0){
 			$arr[$i] = $arr1[$j];
 			$j++;
 		}
 		else{
 			$arr[$i]= $arr2[$k];
 			$k++;
 		}
 	}

 	return $arr;



 }

 $arr1 = array("a","b","c");
 $arr2 = array ( 1, 2 , 3);
 $arr= AlternateCombination($arr1 , $arr2);
 echo "Array after combination <br>";
 print_r($arr);



 ?>

</body>
</html>