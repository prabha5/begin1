<?php

//first input array to store a $first variable
$first=array(array('name'=>'Dinesh',
	               'education'=>'cse',
	               'percentage'=>70),

			 array('name'=>'Prabhakaran',
				   'education'=>'it',
				   'percentage'=>80),

			 array('name'=>'Revathi',
				   'education'=>'cse',
				   'percentage'=>90)
			);

//second input array to store a $second varible
$second=array(array('name'=>'Dinesh',
	                'age'=>20,
	                'sex'=>'male'),

			  array('name'=>'Prabhakaran',
			  	    'age'=>21,
			  	    'sex'=>'male'),

			  array('name'=>'Revathi',
			 	    'age'=>20,
			 	    'sex'=>'female')
			);


$firstname=array_column($first,'name');//to separate 'name' column from a $first 
$secondname=array_column($second,'name');//to separate 'name' column from a $second 


$common_values=array_intersect($firstname, $secondname);//compare two($firstname, $secondname) array and return the matches or common values 
echo "<pre>";
echo "<h3>Name:<br></h3>";
print_r($common_values);


function cse($var)//
{
  if($var=='cse')//
  {
  	//return the input 
  	return $var;
  }

}
function it($var)
{
  if($var=='it')
  {
  	return $var;
  }
  
}

$education=array_column($first, 'education');//to separate 'education' column from a $first 
echo "<h3>Education:<br></h3>";
print_r(array_filter($education,"cse"));
print_r(array_filter($education,"it"));



function percent($var)
{
  if($var<100)
  {
  	return $var;
  }
  
}
$percentage=array_column($first, 'percentage');//to separate 'percentage' column from a $first
echo "<h3>Percentage:<br></h3>";
print_r(array_filter($percentage,"percent"));


function gender($var)
{
  if($var=='male')
  {
  	return $var;
  }
  
}
function genders($var)
{
  if($var=='female')
  {
  	return $var;
  }
  
}
$sex=array_column($second, 'sex');//to separate 'sex' column from $second
echo "<h3>Sex:<br></h3>";
print_r(array_filter($sex,"gender"));
print_r(array_filter($sex,"genders"));


function agelimit($var)
{
  if($var<=20)
  {
  	return $var;
  }
  
}
function agelimits($var)
{
  if($var===21)
  {
  	return $var;
  }
  
}
$age=array_column($second, 'age');//to separate 'age' column from $second
echo "<h3>Age: <br></h3>";
print_r(array_filter($age,"agelimit"));
print_r(array_filter($age,"agelimits"));




?>
