<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



//create table to a record
echo "<table border=1px cellpadding=10>
      <tr class=tb>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>        
      </tr>";


//display a product table 
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	  // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr >

		        <td>". $row["Name"]." </td>
		        <td> " . $row["Price"]."</td>
		        <td>" . $row["Stock"]."</td>
       
			  <tr>";


    }

}

  
?>

<a href="Productdetails.html">ProductDetail</a>