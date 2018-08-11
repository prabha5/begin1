<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Addition
{
	function added($a,$b)
	{
		$this->x=$a;
		$this->y=$b;
		$c=$this->x+$this->y;
		echo $c;
	}
}
$add=new Addition();
$add->added(10,05);
?>
