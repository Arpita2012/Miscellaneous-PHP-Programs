<?php
$s1=$_REQUEST["s1"];
$s2=$_REQUEST["s2"];
$s3=$_REQUEST["s3"];

$valid=true;

if(($s1+$s2)<$s3)
	$valid=false;
if(($s2+$s3)<$s1)
	$valid=false;
if(($s3+$s1)<$s2)
	$valid=false;

if($valid)
	echo "Triangle is valid";
else
	 echo "Triangle is invalid";

?>