<!DOCTYPE html>
<html>
<head>
	<title>Array concatenation</title>
</head>
<body>

<?php 

function concatenate ( $arr1 , $arr2){

   $arr= array();
   //$arr[0]=2;
  // print_r($arr);

   for($i=0;$i<(count($arr1)+count($arr2));$i++){
     if($i<count($arr1))
      $arr[$i]=$arr1[$i];
     else{
      $arr[$i]=$arr2[$i-count($arr1)];
     }

   }
   echo "Array after concatenation <br>";
   print_r($arr);

}

   $arr1 =  array(5,2 ,6,5,3);
   print_r($arr1);
   echo "<br>";
   $arr2 = array(12,50,65,45);
   print_r($arr2);
   echo "<br>";

   concatenate($arr1, $arr2);

   
?>
</body>
</html>