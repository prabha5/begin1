<?php
  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql="DELETE FROM student1 WHERE ID='$id'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


mysqli_close($con);

?>
<t>
<a href="select.php">select.php</a>