<?php
/*input string*/
$string="The decision about what to put into your paragraphs begins with the germination of a seed of ideas; this “germination process” is better known as brainstorming. There are many techniques for brainstorming; whichever one you choose, this stage of paragraph development cannot be skipped. Building paragraphs can be like building a skyscraper: there must be a well-planned foundation that supports what you are building. Any cracks, inconsistencies, or other corruptions of the foundation can cause your whole paper to crumble ";
$array = explode(" ", str_replace(",", ", ", $string));/*to break string in to an array*/
$count=str_word_count($string);/*count the word in a string*/
$wordcount=10;/*to take first 10 word of given string*/
do
{

	for($i=0;$i<$wordcount;$i++)
	{

	echo $array[$i]." ";/*to display a string*/

	}
	echo "<br>";
	$wordcount=$wordcount+5; /*to add further five word to till end of the string*/
}while($wordcount<=$count)


   
?>