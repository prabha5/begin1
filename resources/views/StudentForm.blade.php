<!DOCTYPE html>
<html>
<head>
</head>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<body>
	

	<form action="{{ url('viewform') }}" method="post">	
		 {{ csrf_field() }}

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
				<td><input type="text" name="emailid"></td>
			</tr>

			<tr>
				<td>MobileNo : </td>
				<td><input type="text" name="mobileno"></td>
			</tr>


			<tr>
				<td>Sex : </td>
				<td><input type="radio" name="sex"  value="male" size="10">Male
				<input type="radio" name="sex" value="Female" size="10">Female </td>
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
				<td>file</td>
				<td><input type="file" name="files"></td>
			</tr>

			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Confirm password</td>
				<td><input type="text" name="rpassword"></td>
			</tr>
			
			<tr>
				<td><input type="submit"  value="Insert"></td>
			</tr>
		


		</table>
	</form>
</body>
</html>