<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
  
   //get the value from form.html

	$name  =  $_POST["name"];
 	$fname = $_POST["fathername"]; 
    $address= $_POST["personaladdress"];
 	$sex 	= $_POST["sex"];
    $city 	= $_POST["City"];
 	$course = $_POST["Course"];
	$district= $_POST["District"];
 	$state 	 = $_POST["State"];
 	$pin 	= $_POST["pincode"];
 	$email 	= $_POST["emailid"];
 	$dob 	= $_POST["dob"];
 	$mobile = $_POST["mobileno"];


  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

//insert the values to student table 
$sql= "INSERT INTO student (Name,FatherName,PersonalAddress,Sex,City,Course,District,State,PinCode,EmailId,Dob,MobileNo) values ('$name','$fname','$address','$sex','$city','$course','$district','$state','$pin','$email','$dob','$mobile')";

//check if the $sql query true or not
if ($conn->query($sql) === TRUE) 
{
    echo "insert values successfully";//it's true display if statement
} else {
    echo "Error to insert a value " . $conn->error;//it's false display else statement
}


$conn->close();



 ?>