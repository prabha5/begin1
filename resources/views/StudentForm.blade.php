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

		<table align="center">

			<th>
				<h2>Student Registration Form</h2>
			</th>

			<tr>
				<td>FirstName :</td>
				<td><input type="text" name="firstname" value="{{old('firstname')}}"></td>
			</tr>

			<tr>
				<td>LastName : </td>
				<td><input type="text" name="lastname" value="{{old('lastname')}}"></td>
			</tr>

			<tr>
				<td>EmailId : </td>
				<td><input type="text" name="emailid" value="{{old('emailid')}}"></td>
			</tr>

			<tr>
				<td>MobileNo : </td>
				<td><input type="text" name="mobileno" value="{{old('mobileno')}}"></td>
			</tr>


			<tr>
				<td>Sex : </td>
				<td><input type="radio" name="sex"   value="{{old('sex')}}">Male
				<input type="radio" name="sex"  value="{{old('sex')}}">Female </td>
			</tr>


			<tr>
				<td>Course :</td>
				<td><select name="course">
				<option value="{{old('course')}}" selected>select</option>
				<option value="{{old('course')}}">B.TECH</option>
				<option value="{{old('course')}}">MBA</option>
				<option value="{{old('course')}}">BCA</option>
				</select></td>
			</tr><br>

			<tr>
				<td>DOB : </td>
				<td><input type="date" name="dob" value="{{old('dob')}}"></td>
			</tr>

			<tr>
				<td>Address :</td>
				<td><textarea name="address"  value="{{old('address')}}"></textarea></td>
			</tr>

			<tr>
				<td>State : </td>
			    <td><input type="checkbox" name="State" value="{{old('State')}}">Tamilnadu
				    <input type="checkbox" name="State" value="{{old('State')}}">other</td>
			</tr>
			<tr>
				<td>file</td>
				<td><input type="file" name="files" value="{{old('files')}}"></td>
			</tr>

			<tr>
				<td>password</td>
				<td><input type="text" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>Confirm password</td>
				<td><input type="text" name="rpassword" value="{{old('rpassword')}}"></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="tc" value="{{old('tc')}}">Terms and Conditions</td>
			</tr>
			
			<tr>
				<td><input type="submit"  value="Insert"></td>
			</tr>
		


		</table>
	</form>
</body>
</html>