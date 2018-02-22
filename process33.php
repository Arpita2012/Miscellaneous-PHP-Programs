<!DOCTYPE html>
<html>
<head>
	<title>list rotation</title>
</head>
<body>

 	<?php 
 	  if(isset($_REQUEST["k"])){
 	  	$k=$_REQUEST["k"];
 	  	$a=array(1,2,3,4,5);
 	  	//array_shift($a);
 	  	print_r($a);
 	  	$n=count($a);
 	  	$b=array();

 	  	//when copy of array is created
 	  	/*for ($i=0; $i < $n ; $i++) { 
 	  		if(($i-$k)<0)
 	  			$b[$n-$k+$i]=$a[$i];
 	  		if(($i-$k)>=0)
 	  		$b[$i-$k]=$a[$i];
 	  	}


 	  for ($i=0; $i < $n; $i++) { 
 	  	echo $b[$i]." ";
 	  }

		*/

 	  //without creating copy of list

 	  //1.store k elements on another temp
 	  for ($j=0; $j <$k ; $j++) {
 	  		$b[$j]= $a[$j];
 	  	
 	  }
 	  
 	  //2.shifing rest elements
 	  for ($i=0; $i < $n-$k ; $i++) { 
 	  		$a[$i]=$a[$i+$k];
 	  	}

 	  	//3. storing k elements back to original array
 	  	for ($k=$n-$k,$j=0; $k <$n ; $k++,$j++) { 
 	  		$a[$k]=$b[$j];
 	  	}


 	  	echo "after rotation";
 	  	print_r($a);


 	  }
 	  ?>

 	<form action="process33.php">
 		<input type="text" name="k" placeholder="Enter value of k for rotation">
 		<input type="submit" name="">
 	</form>

</body>
</html>