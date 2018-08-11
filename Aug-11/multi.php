 <?php
 /*using multidimensional array*/

 $veg=array("vegetables"=>array("name"=>array("tomato","potato","brinjal"),
	  	                         "price"=>array(20,40,50)),
	         "fruits"=>array("name"=>array("mango","orange","guva"),
	                        "price"=>array(100,150,30))
	         );//creating a multidimensional array of using a variable $veg 

 echo "<pre>";
 print_r($veg)."<br>";//print the $veg array
 echo "<br>";

 echo ($veg[vegetables][name][2])."\t";
 echo ($veg[vegetables][price][2])."<br><br>";

 $titleofveg=(array_column($veg, "name"));//return the value from  a name column
 $priceofveg=(array_column($veg, "price"));//return the value from a price column
  
  print_r($titleofveg);
  print_r($priceofveg);



?>  