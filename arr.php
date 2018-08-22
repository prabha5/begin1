<?php
function on(){
$choco=array("eclairs","dairy_milk","aasai","munch");
$arr_l=count($choco);
for($x=0;$x<=$arr_l;$x++)
{
	echo $choco[$x];
	echo "<br>";
}
}
function tw()
{
	$sports = array('SACHIN' =>"cricket" ,'PELE'=>"football",'DJKOVIC'=>"tennis",'PRADEEP'=>"kabbadi" );
	foreach ($sports as $x => $x_value) {
		echo "" .$x." is a " .$x_value. " player ";
		echo "<br>";

		# code...
	}
}
function thr()
{
	$colors[0] = "Red"; 
$colors[1] = "Green"; 
$colors[2] = "Blue";

// Printing array structure
print_r($colors);
}
on();
tw();
echo "<br>";
thr();
?>