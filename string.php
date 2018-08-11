<?php
function str1()
{
	echo strlen("kenhike");
	echo"<br>";


}
function str2()
{
	echo strrev("kenhike");
	echo "<br>";
	echo strpos("kenhike","h");
	echo"<br>";

}
function str3()
{
	echo str_word_count("welcome to the world");
    echo"<br>";
	echo str_replace("world","lab","welcome to the world");
	echo"<br>";
}
function add($x=20,$y=50)//default argument value declare 
{
	$y=$x+$y;
	echo "addition of x and y is $y";
	echo "<br>";
 
}
str1();
echo "<br>";
str2();
echo "<br>";
str3();
echo "<br>";
add();//call the function add
add(10,20);//argument value pass by the function add


?>