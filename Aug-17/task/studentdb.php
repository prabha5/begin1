<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";//database name

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

// Create the student table
$sql = "CREATE TABLE student1(Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
FatherName VARCHAR(30) NOT NULL,
PersonalAddress VARCHAR(50) NOT NULL,
Sex   VARCHAR(50) NOT NULL,
City  VARCHAR(50) NOT NULL,
Course VARCHAR(50) NOT NULL,
District VARCHAR(50) NOT NULL,
State VARCHAR(50) NOT NULL,
PinCode VARCHAR(50) NOT NULL,
EmailId VARCHAR(50) NOT NULL,
DOB VARCHAR(50) NOT NULL,
MobileNo VARCHAR(50) NOT NULL)";


if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();//connection closed
?>
