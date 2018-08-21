<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<form action="{{ url('editform') }}" method="get">	

		 <input type="hidden" value="{{ csrf_token() }}">

		<table>

			<th>
				<h3>Student Registration Form</h3>
			</th>

			<tr>
				<td>FirstName :</td>
				<td><input type="text" name="firstname" value="{{$res}}"></td>
			</tr>

			<tr>
				<td>LastName : </td>
				<td><input type="text" name="lastname" value="{{$res}}"></td>
			</tr>

			<tr>
				<td>EmailId : </td>
				<td><input type="email" name="emailid" value="{{$res}}"></td>
			</tr>

			<tr>
				<td>MobileNo : </td>
				<td><input type="text" name="mobileno" value="{{$res}}"></td>
			</tr>


			<tr>
				<td>Sex : </td>
				<td><input type="radio" name="sex"  value="{{$res}}" >Male
				<input type="radio" name="sex" value="{{$res}}" >Female </td>
			</tr>

			<tr>
				<td>Course :</td>
				<td><select name="Course">
				<option value=" " selected>select</option>
				<option value="{{$res}}">B.TECH</option>
				<option value="{{$res}}">MBA</option>
				<option value="{{$res}}">BCA</option>
				</select></td>
			</tr><br>

			<tr>
				<td>DOB : </td>
				<td><input type="date" name="dob" value="{{$res}}"></td>
			</tr>

			<tr>
				<td>Address :</td>
				<td><input type="text" name="address" value="{{$res}}"></<td>
			</tr>

			<tr>
				<td>State : </td>
			    <td><input type="checkbox" name="State" value="{{$res}}">Tamilnadu
				    <input type="checkbox" name="State" value="{{$res}}">other</td>
			</tr>
			
			<tr>
				<td><input type="submit"  value="Insert"></td>
			</tr>
		


		</table>
	</form>
</body>
</html>