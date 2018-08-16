<?php
  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";





// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$Id=$_POST['id'];
$name1  =  $_POST['name'];
$fname1 = $_POST["fathername"];
$address1= $_POST["personaladdress"];
$sex1   = $_POST["sex"];
$city1  = $_POST["City"];
$course1 = $_POST["Course"];
$district1= $_POST["District"];
$state1    = $_POST["State"];
$pin1   = $_POST["pincode"];
$email1   = $_POST["emailid"];
$dob1   = $_POST["dob"];
$mobile1 = $_POST["mobileno"];
$file1=$_POST["file"];



$sql="UPDATE student1 SET Name='$name1',FatherName='$fname1',PersonalAddress='$address1',Sex='$sex1' ,City='$city1' ,Course='$course1',District='$district1',State='$state1',PinCode='$pin1',EmailId='$email1',DOB='$dob1',MobileNo='$mobile1 ',File='$file1'  WHERE Id='$Id' ";



if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error update record: " . $conn->error;
}


mysqli_close($con);

?>

<a href="select.php">select.php</a>
