<?php
$num=array(11,55,22,44,33);
$str=array(sacihn,federrer,pele,djkovic);
sort($num);
$a_len=count($num);
for($x=0;$x<$a_len;$x++)
{
	echo $num[$x];
	echo "<br>";

}
echo "<br>";

rsort($num);
for($y=0;$y<$a_len;$y++)
{
	echo $num[$y];
	echo "<br>";
}
echo "<br>";
sort($str);
echo "<br>";
rsort($str);
?>