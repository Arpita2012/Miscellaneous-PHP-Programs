<?php
	$CostPrice = $_REQUEST["CP"];
	$SellingPrice = $_REQUEST["SP"];



	if($CostPrice>$SellingPrice)
		echo " LOSS of ".($CostPrice-$SellingPrice);
	else if ($SellingPrice>$CostPrice)
		echo "PROFIT of ".($SellingPrice - $CostPrice);
	else
		echo "No Profit/No Loss ";

	$gender=$_REQUEST["gen"];
		echo " entered gender $gender";

	?>