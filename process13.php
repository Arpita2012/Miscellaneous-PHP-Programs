<?php
  $n1=$_REQUEST["n1"];
    $n2=$_REQUEST["n2"];
      $n3=$_REQUEST["n3"];
        $n4=$_REQUEST["n4"];

  $arr=array($n1, $n2, $n3 ,$n4);
 // print_r($arr);

  $max=$arr[0];

  foreach ($arr as $key ) {
  	if($key>$max)
  		$max=$key;
  }

  echo "Largest of all four numbers is $max";

  ?>