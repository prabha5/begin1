<!DOCTYPE html>
<html>
<head>
</head>
<body>


	<form action="{{ url("updateStudent/$student->id") }}" method="post">	
		 {{ csrf_field() }}

		<table>

			<th>
				<h3>Student Registration Form</h3>
			</th>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value="{{$student->id}}" ></td>
			</tr>

			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" value="{{$student->name}}" ></td>
			</tr>
		

			<tr>
				<td>EmailId : </td>
				<td><input type="email" name="email" value= "{{$student->email}}" ></td>
			</tr>



			<tr>
				<td>City : </td>
				<td><input type="text" name="city" value="{{$student->city}}" ></td>
			</tr>
			
			<tr>
				<td>Country : </td>
				<td><input type="text" name="country" value="{{$student->country}}"></td>
			</tr>
			<tr>
				<td><input type="submit"  value="update"></td>
			</tr>
		


		</table>
		
	</form>


</body>
</html>
