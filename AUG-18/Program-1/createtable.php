<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

$sql="CREATE TABLE product(Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Price VARCHAR(30) NOT NULL,
Stock VARCHAR(50) NOT NULL )";


if ($conn->query($sql) === TRUE) {
    echo "Tablecreated successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();//connection closed

?>

