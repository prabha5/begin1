<?php
  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";

$id=$_POST['Id'];

  $name  =  $_POST["name"];
  $fname = $_POST["fathername"]; 
    $address= $_POST["personaladdress"];
  $sex  = $_POST["sex"];
    $city   = $_POST["City"];
  $course = $_POST["Course"];
  $district= $_POST["District"];
  $state   = $_POST["State"];
  $pin  = $_POST["pincode"];
  $email  = $_POST["emailid"];
  $dob  = $_POST["dob"];
  $mobile = $_POST["mobileno"];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql="UPDATE student1 SET Name='$name',FatherName='$fname',PersonalAddress='$address',Sex='$sex',City='$city',Course='$course',District='$district',State='$state',PinCode='$pin',EmailId='$email',Dob='$dob',MobileNo='$mobile' WHERE Id=$id";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();



?>


<!DOCTYPE html>
<html>
<head>
</head>
<style >
{
  margin-top: 2px;
}
</style>
<body>
  

  <form action="select.php" method="post">    
    <table>
    <th><h3> update Student Registration Form</h3></th><br>
    <tr>
      <td>Name :</td> 
      <td><input type="text" name="name" value="<?php echo  $name;?>" >
      </td>
    </tr><br>

    <tr>
      <td>Father Name : </td>
      <td><input type="text" name="fathername" value="<?php echo  $fname;?>" >
      </td>
    </tr><br>
    
    <tr>
      <td>Personal Address :</td>
      <td><input type="text" name="personaladdress" value="<?php echo  $adress;?>"><td>
    </tr><br>

    <tr>
      <td>Sex : </td>
      <td><input type="radio" name="sex" value="<?php echo  $sex;?>" >Male
      <input type="radio" name="sex" value="<?php echo  $sex;?>" >Female </td>
    </tr><br>

    <tr>
      <td>City : </td>
      <td><select name="City">
      <option value="-1" selected>select</option>
      <option value="Trichy">TRICHY</option>
      <option value="madhurai">MADHURAI</option>
      <option value="thanjavur">THANJAVUR</option>
      <option value="salem">SALEM</option>
      </select></td>
    </tr><br>

    <tr>
      <td>Course :</td>
      <td><select name="Course">
      <option value="-1" selected>select</option>
      <option value="B.Tech">B.TECH</option>
      <option value="MCA">MCA</option>
      <option value="MBA">MBA</option>
      <option value="BCA">BCA</option>
      </select></td>
    </tr><br>

    <tr>
      <td>District :</td> 
      <td><select name="District">
      <option value="-1" selected>select</option>
      <option value="Chennai">Chennai</option>
      <option value="Trichy">Trichy</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Madhurai">Madhurai</option>
      </select></td>
    </tr> <br>

    <tr>
      <td>State : </td>
      <td><select Name="State">
      <option value="-1" selected>select</option>
      <option value="Tamilnadu">Tamilnadu</option>
      <option value="others">others</option>
      </select></td>
    </tr><br>

    <tr>
      <td>Pincode : </td>
      <td><input type="text" name="pincode" value="<?php echo  $pin;?>"><td>
    </tr><br>

    <tr>
      <td>EmailId : </td>
      <td><input type="text" name="emailid" value="<?php echo  $email;?>"  ></td>
    </tr><br>

    <tr>
      <td>DOB : </td>
      <td><input type="text" name="dob"  value="<?php echo  $dob;?>" ></td>
    </tr><br>

    <tr>
      <td>MobileNo : </td>
      <td><input type="text" name="mobileno" value="<?php echo  $mobileno;?>"   ></td>
    </tr><br><br>

    <tr>
      <td>Marksheet:<td>
      <input type="file" name="file" >
    </tr>

    <tr>
      <td><input type="submit" value="Submit Form"></td>
    </tr>


    </table>
  </form>



</body>
</html>
