<?php



$multi=array(array(0,1,2,3,4,5),
			array('a','b','c','d','e'),
			array('A','B','C','D','E'),
			array('aa','bb','cc','dd','ee'),
			array('AA','BB','cc','DD','EE')
			);
$single=array("zero","one","two","three","four","five");

foreach ($multi as $key => $value) 
{
	array_splice($multi[$key],$key,0,$single[$key]);
}

echo "<pre>";
print_r($multi)."<br>";


?>
