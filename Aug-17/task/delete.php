<?php
  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";


$Id=$_GET['Id'];
$name1  =  $_GET['Name'];
$fname1 = $_GET["FatherName"];
$address1= $_GET["PersonalAddress"];
$sex1   = $_GET["Sex"];
$city1  = $_GET["City"];
$course1 = $_GET["Course"];
$district1= $_GET["District"];
$state1    = $_GET["State"];
$pin1   = $_GET["PinCode"];
$email1   = $_GET["EmailId"];
$dob1   = $_GET["DOB"];
$mobile1 = $_GET["MobileNo"];
$file1=$_GET["File"];

// Create connection


$conn = new mysqli($servername, $username, $password,$dbname);

//delete query
$sql="DELETE FROM student1 WHERE Id='$Id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error delete record: " . $conn->error;
}


mysqli_close($con);

?>