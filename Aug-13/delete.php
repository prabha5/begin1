<?php
  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";




// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql="DELETE FROM student1 WHERE Id='15'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error delete record: " . $conn->error;
}


mysqli_close($con);

?>