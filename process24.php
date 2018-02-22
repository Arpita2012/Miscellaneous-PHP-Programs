<!DOCTYPE html>
<html>
<head>
	<title>Binary to decimal conversion</title>
</head>
<body>

  <?php 
  if(isset($_GET["bin"]))
  {
  	$binary=$_GET["bin"];
  	$num=$binary;
  	$decimal= 0;
  	$base = 1;
  	while ($num> 0) {
  		$rem = $num%10;
  		$decimal = $decimal + $rem * $base;
  		$num = $num/10;
  		$base = $base * 2;

  		# code...
  	}

  	echo "Decimal equivalent for binary number $binary is $decimal";

  	}
  ?>


  <form>
  	<input type="text" name= "bin" placeholder="Enter a binary number">
  	<input type="submit" value="Get Corresponding decimal number">
  </form>

</body>
</html>