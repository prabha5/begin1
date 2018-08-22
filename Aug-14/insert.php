<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
  
   //get the value from form.html

	$name1  =  $_POST["name"];
 	$fname1 = $_POST["fathername"]; 
    $address1= $_POST["personaladdress"];
 	$sex1 	= $_POST["sex"];
    $city1 	= $_POST["City"];
 	$course1 = $_POST["Course"];
	$district1= $_POST["District"];
 	$state1 	 = $_POST["State"];
 	$pin1 	= $_POST["pincode"];
 	$email1 	= $_POST["emailid"];
 	$dob1 	= $_POST["dob"];
 	$mobile1 = $_POST["mobileno"];
 	$file=$_POST["file"];
 


  
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
$sql= "INSERT INTO student1(Name,FatherName,PersonalAddress,Sex,City,Course,District,State,PinCode,EmailId,Dob,MobileNo,File) values ('$name1','$fname1','$address1','$sex1','$city1','$course1','$district1','$state1','$pin1','$email1','$dob1','$mobile1','$file')";


//check if the $sql query true or not
if ($conn->query($sql) === TRUE) 
{
    echo "insert values successfully";//it's true display if statement
} else {
    echo "Error to insert a value " . $conn->error;//it's false display else statement
}


$conn->close();

 ?>

 	<a href="select.php">select</a>
 	<a href="insert.php">Insert</a>