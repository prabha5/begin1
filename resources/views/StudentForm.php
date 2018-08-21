<!DOCTYPE html>
<html>
<head>
</head>
<body>
	

	<form action="{{ url('viewform') }}" method="post">	

		 <input type="hidden" value="{{ csrf_token() }}">

		<table>

			<th>
				<h3>Student Registration Form</h3>
			</th>

			<tr>
				<td>FirstName :</td>
				<td><input type="text" name="firstname"></td>
			</tr>

			<tr>
				<td>LastName : </td>
				<td><input type="text" name="lastname"></td>
			</tr>

			<tr>
				<td>EmailId : </td>
				<td><input type="email" name="emailid"></td>
			</tr>

			<tr>
				<td>MobileNo : </td>
				<td><input type="text" name="mobileno"></td>
			</tr>


			<tr>
				<td>Sex : </td>
				<td><input type="radio" name="sex"  value="male" >Male
				<input type="radio" name="sex" value="Female" >Female </td>
			</tr>

			<tr>
				<td>Course :</td>
				<td><select name="Course">
				<option value=" " selected>select</option>
				<option value="B.Tech">B.TECH</option>
				<option value="MBA">MBA</option>
				<option value="BCA">BCA</option>
				</select></td>
			</tr><br>

			<tr>
				<td>DOB : </td>
				<td><input type="date" name="dob"></td>
			</tr>

			<tr>
				<td>Address :</td>
				<td><input type="text" name="address"></<td>
			</tr>

			<tr>
				<td>State : </td>
			    <td><input type="checkbox" name="State" value="Tamilnadu">Tamilnadu
				    <input type="checkbox" name="State" value="other">other</td>
			</tr>
			
			<tr>
				<td><input type="submit"  value="Insert"></td>
			</tr>
		


		</table>
	</form>
</body>
</html>