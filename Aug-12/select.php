<!DOCTYPE html>
<html>
<head>
    <title>studentdDatabase</title>
    <style >
        .tb{
            border: 1px solid black;
            }
    </style>
</head>
<body>

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
  
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
echo "Connected successfully <br>\n";

//create table to a record
echo "<table class=tb>
<tr class=tb>
<th>Name</th>
<th>EmailId</th>
<th>DOB</th>
<th>MobileNo</th>
</tr>";

//selection query:to select Name,EmailId,DOB,MobileNo from the student table
$sql = "SELECT Name,EmailId,DOB,MobileNo FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<tr class=tb>
        <td>". $row["Name"]." </td>
        <td> " . $row["EmailId"]."</td>
        <td>" . $row["DOB"]."</td>
        <td>".$row["MobileNo"]."</td>;
        </tr>";
     
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();//connection will be terminate



 ?>

</body>
</html>


