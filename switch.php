<?php
$x=5;
$y=2;
switch("mul")
{
	case "add":
	echo $x+$y;
	break;
	case "sub":
	echo $x-$y;
	break;
	case "mul":
	echo $x*$x;
	break;
	default:
	echo "check the labelname";
}
?>