<!DOCTYPE html>
<html>
<head>
	<title>Number guessing game</title>
</head>
<body>
<?php
if(isset($_REQUEST["number"])) 
 { $number = $_REQUEST["number"];
  
  $randomnumber= mt_rand(1,10);
 // echo $randomnumber;

  if($number> 0 && $number<11){
  			if($number!= $randomnumber){
  				echo "Incorect guess Try Again";

  			}
  			else {
  				echo "$randomnumber is correct guess";
  			}
  		}
}
  ?>

  <form >
  	Guess a number between 1 to 10:
  	<input type="text" name="number"><br><br>
  


  	<input type="submit" name="submit" value = "Ready to go">
  		
  </form>

</body>
</html>