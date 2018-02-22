<?php /*to count no. of lines in given file*/

	touch("line_count.txt");
	$fp=fopen("line_count.txt", "a");
 	echo "Writing some lines<br>";
	$i=0;
	while ($i++<5) {
		fwrite($fp, "LIne : $i \n");

	}

	fwrite($fp,"last line");

	fclose($fp);

	echo "Counting lines<br>";

	$fp1= fopen("line_count.txt", "r");

	$count=0;

 	while(!feof($fp1))
 	{
 		echo fgets($fp1)."<br>";
 		$count++;

 	}

 fclose($fp1);
 echo "Number of lines in ur file : $count"




	?>