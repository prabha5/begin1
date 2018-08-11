<?php

$arr1=array('a','b','c','d','e');
$arr2=array('a','b','c','i');
echo "<pre>";


print_r(array_replace($arr1,$arr2));

print_r(array_merge($arr1,$arr2));

print_r(array_intersect($arr1, $arr2));

print_r(array_unique($arr1,$arr2));

array_unshift($arr2, 0);
print_r($arr2);

echo "<pre>";
$marr=array(array('1','3','5','7'),
	        array('2','4','6','8')	       
	    	);
echo ($marr[1][1]) . "<br>";
echo ($marr[1][3])."<br> <br>" ;

foreach ($arr1 as $x => $x_value) 
{
	  echo "Key=" . $x . ", Value=" . $x_value;
  	  echo "<br>";
}
  echo "<br>";
  print_r($marr)."<br>";



	  
 








?>