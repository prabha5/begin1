<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "studentForm";

$id=$_POST['Id'];
$name1  =  $_POST['Name'];
$fname1 = $_POST["FatherName"];   
$address1= $_POST["PersonalAddress"];
$sex1   = $_POST["Sex"];
$city1  = $_POST["City"];      
$course1 = $_POST["Course"];
$district1= $_POST["District"];
$state1    = $_POST["State"];

$pin1   = $_POST["PinCode"];
$email1   = $_POST["EmailId"];
$dob1   = $_POST["DOB"];
$mobile1 = $_POST["MobileNo"];
$file=$_POST["File"];




// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql="SELECT * FROM student1 WHERE Id=$id";

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
  

  <form action="update.php" method="post" >    

    <table>
       <th><h3> update Student Registration Form</h3></th><br>
       <tr> 
        <td>ID </td>
        <td><input type="text" name=id value="<?php echo $id;?>"></td> 
       </tr>   
   
      <tr>
        <td>Name :</td> 
        <td><input type="text" name="name" value="<?php echo $name1;?>" >
        </td>
      </tr><br>

      <tr>
        <td>Father Name : </td>
        <td><input type="text" name="fathername" value="<?php echo   $fname1;?>" >
        </td>
      </tr><br>
      
      <tr>
        <td>Personal Address :</td>
        <td><input type="text" name="personaladdress" value="<?php echo  $address1;?>"><td>
      </tr><br>

      <tr>
        <td>Sex : </td>
        <td><input type="radio" name="sex" <?php if($sex1=="Male") {echo "checked";}?> value="Male">Male
        <input type="radio" name="sex" <?php if($sex1=="Female") {echo "checked";}?>    value="Female">Female </td>
      </tr><br>

      <tr>
        <td>City : </td>
        <td><select name="City">
        <option value="" selected>select</option>
        <option value="Trichy"  <?php if($city1=="Trichy"){echo "selected";}?>>TRICHY
        </option>
        <option value="madhurai"  <?php if($city1=="madhurai"){echo "selected";}?>>MADHURAI</option>
        <option value="thanjavur"  <?php if($city1=="thanjavur"){echo "selected";}?> >THANJAVUR</option>
        <option value="salem"   <?php if($city1=="salem"){echo "selected";}?>>SALEM</option>
        </select></td>
      </tr><br>

      <tr>
        <td>Course :</td>
        <td><select name="Course">
        <option value="" selected>select</option>
        <option value="B.Tech" <?php if($course1=="B.Tech"){echo "selected";}?>>B.TECH</option>
        <option value="MCA" <?php if($course1=="MCA"){echo "selected";}?>>MCA</option>
        <option value="MBA" <?php if($course1=="MBA"){echo "selected";}?>>MBA</option>
        <option value="BCA" <?php if($course1=="BCA"){echo "selected";}?>>BCA</option>
        </select></td>
      </tr><br>

      <tr>
        <td>District :</td> 
        <td><select name="District">
        <option value="" selected>select</option>
        <option value="Chennai" <?php if($district1=="Chennai"){echo "selected";}?>>Chennai</option>
        <option value="Trichy" <?php if($district1=="Trichy"){echo "selected";}?>>Trichy</option>
        <option value="Coimbatore" <?php if($district1=="Coimbatore"){echo "selected";}?>>Coimbatore</option>
        <option value="Madhurai" <?php if($district1=="Madhurai"){echo "selected";}?>>Madhurai</option>
        </select></td>
      </tr> <br>

      <tr>
        <td>State : </td>
        <td>
          <input type="checkbox" name="State"  value="Tamilnadu" <?php if($state1=="Tamilnadu"){echo "checked='checked'";}?>>Tamilnadu
        <input type="checkbox" name="State"   value="other" <?php if($state1=="other"){echo "checked='checked'";}?> >other</td>
      </tr><br>

      <tr>
        <td>Pincode : </td>
        <td><input type="text" name="pincode" value="<?php echo   $pin1 ;?>"><td>
      </tr><br>

      <tr>
        <td>EmailId : </td>
        <td><input type="text" name="emailid" value="<?php echo   $email1;?>"  ></td>
      </tr><br>

      <tr>
        <td>DOB : </td>
        <td><input type="text" name="dob"  value="<?php echo  $dob1;?>" ></td>
      </tr><br>

      <tr>
        <td>MobileNo : </td>
        <td><input type="text" name="mobileno" value="<?php echo  $mobile1;?>"   ></td>
      </tr><br><br>

      <tr>
        <td>Marksheet:</td>
        <td><input type="file" name="file" value="<?php echo $file;?>" accept="file/*">
        <img src="<?php echo $file;?>" width='100' height='100' ></td>
      </tr>

      <tr>
        <td><input type="submit" value="update"></td>
      </tr>
           
     
    </table>
  </form>



</body>
</html>
