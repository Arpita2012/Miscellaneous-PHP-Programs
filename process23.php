
	
    
    <?php
   // if(isset($_REQUEST["str"]))
     $str=$_REQUEST["str"];


      function permute( $strg, $l, $r ){
      
      	if( $l == $r )
      		echo $strg."<br>";
      	else
      		for($i=$l;$i<=$r;$i++){

      			echo $strg+$l;

      			/*swap(($strg+$l),($strg+$i));
      			permute($strg, $l+1, $r);
      			swap(($strg+$l),($strg+$i)); //bactrack
      			*/
      		}
      		     }


      echo $str."<br>";
      $n=strlen($str);
      permute($str, 0 , $n-1);


      function swap($x,$y){
      
      	$temp=$x;
      	$x=$y;
      	$y=$temp;
      }

 


    ?>

