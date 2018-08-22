<?php

$name=$_POST['name'];
$price=$_POST['price'];
$stock=$_POST['stock'];

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

$sql="INSERT INTO product(Name,Price,Stock) VALUES ('$name','$price','$stock')";

if ($conn->query($sql) === TRUE) 
{
    echo "insert values successfully";
} else {
    echo "Error to insert a value " . $conn->error;
}


$conn->close();

?>
<a href="Productdetails.html">ProductDetail</a>