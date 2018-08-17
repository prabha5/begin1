



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
echo "<table border=1px cellpadding=10>
      <tr class=tb>
        <th>Name</th>
        <th>EmailId</th>
        <th>DOB</th>
        <th>MobileNo</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>";


//selection query from the student table
$sql = "SELECT * FROM student1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {



        echo "<tr >
        <td>". $row["Name"]." </td>
        <td> " . $row["EmailId"]."</td>
        <td>" . $row["DOB"]."</td>
        <td>".$row["MobileNo"]."</td>


        <td>
        <form action='edit.php' method='post'>

          <button type='submit' formmethod='post'>edit</button>
         
          <input type='hidden' name='Name' value=".$row["Name"].">
          <input type='hidden' name='FatherName' value=".$row["FatherName"].">
          <input type='hidden' name='PersonalAddress' value=".$row["PersonalAddress"].">
          <input type='hidden' name='Sex' value=".$row["Sex"].">
          <input type='hidden' name='City' value=".$row["City"].">
          <input type='hidden' name='Course' value=".$row["Course"].">
          <input type='hidden' name='District' value=".$row["District"].">
          <input type='hidden' name='State' value=".$row["State"].">
          <input type='hidden' name='PinCode' value=".$row["PinCode"].">
          <input type='hidden' name='EmailId' value=".$row["EmailId"].">
          <input type='hidden' name='DOB' value=".$row["DOB"].">
          <input type='hidden' name='MobileNo' value=".$row["MobileNo"].">
          <input type='hidden' name='Id' value=".$row["Id"].">
          <input type='hidden' name='File' value=".$row["File"].">
         </form>


          
      </td> 
      <td>  
      <form action='delete.php' method='get'>

          <button type='submit' formmethod='get'>delete</button>
         
          <input type='hidden' name='Name' value=".$row["Name"].">
          <input type='hidden' name='FatherName' value=".$row["FatherName"].">
          <input type='hidden' name='PersonalAddress' value=".$row["PersonalAddress"].">
          <input type='hidden' name='Sex' value=".$row["Sex"].">
          <input type='hidden' name='City' value=".$row["City"].">
          <input type='hidden' name='Course' value=".$row["Course"].">
          <input type='hidden' name='District' value=".$row["District"].">
          <input type='hidden' name='State' value=".$row["State"].">
          <input type='hidden' name='PinCode' value=".$row["PinCode"].">
          <input type='hidden' name='EmailId' value=".$row["EmailId"].">
          <input type='hidden' name='DOB' value=".$row["DOB"].">
          <input type='hidden' name='MobileNo' value=".$row["MobileNo"].">
          <input type='hidden' name='Id' value=".$row["Id"].">
          <input type='hidden' name='File' value=".$row["File"].">
         </form>
      </td>
          
 

        </tr>"; 
     
     
    }
} else {
    echo "0 results";
}


echo "</table>";

$conn->close();//connection will be terminate


?>


