<?php
	 $number=array(
	 		array(o,1,2,3,4),
	 		array(5,6,7,8),
	 		array(9,10,11,12));
	 		
	 $count=count($number);
	 echo "$count";
	 echo "<br>";
	 
	 	for($r=0;$r<3;$r++)
	 	{
	 		echo "arrayof ".$r;
	 		echo "<br>";
	 		for ($c=0; $c <4 ; $c++)
	 		{ 
	 			echo($number[$r][$c]);	 			
	 		}
	 		echo "<br>";
	 	}
	 die();
	 print_r($number);
?>