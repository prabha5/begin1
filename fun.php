<?php
$x=15;
$y=10;
function adds()
{

	global $x,$y,$z;
	$z=$x+$y;
	echo $z;
}
function sub($a,$b)
{
	$b=$a-$b;
	echo $b;
}
function mul($l = 10,$m = 20)
{
	$l=$l*$m;
	echo $l;

}
adds();
echo "<br>";
sub(200,150);
echo "<br>";
mul(1,2);
echo "<br>";
mul();
?>