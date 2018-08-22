<?php
class statements{
function one()
{
	$x=7;
	if($x==7)
		echo $x;
}
function two()
{
		$x=7;
		$y=8;
	if($x>$y)
	{
		echo "tuesday";
	}
	else
	{
		echo "monday";
	}
}
function three()
{
	$x=7;
	$y=8;
	$z=9;
	if($x>$y)
	{
		echo "monday";

	}
	elseif($y>$x)
	 {
		echo "tuesday";
	}
	else

	{
		echo "wednesday";

	}
}
}
$stmt=new statements();
$stmt->one();
echo "<br>";
$stmt->two();
echo "<br>";
$stmt->three();
?>