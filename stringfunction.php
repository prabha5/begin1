<?php
 			/*string function*/

	$string="I love to play an outer game";

	$count=str_word_count($string);//count the no of word in a given string
	echo $count ;
	echo "<br>";

	echo addcslashes($string,o);// add backslashes infront of o in a string
	echo "<br>";

	print_r(explode(" ",$string));//to convert string into an array
	echo "<br>";

	echo strrev("$string");//reverse a string
	echo "<br>";

	$string1="It's very intersting";
	echo strcmp($string,$string1);//comparison of two string if both are equal return 									('true' or '1') else ('false' or '0')
	echo "<br>";

	echo ucwords($string);//to print all first character of a word in a given string to							Uppercase
	echo "<br>";
	echo strchr($string,"play");





?>