<!DOCTYPE html>
<html>
<head>
</head>
<body>
	

	<form action="{{ url('getstudentForm') }}" method="get">	
		 {{ csrf_field() }}

		<table>

			<th>
				<h3>Student Registration Form</h3>
			</th>

			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" value=""></td>
			</tr>
		

			<tr>
				<td>EmailId : </td>
				<td><input type="email" name="email" value=""></td>
			</tr>



			<tr>
				<td>City : </td>
				<td><input type="text" name="city" value=""></td>
			</tr>
			
			<tr>
				<td>Country : </td>
				<td><input type="text" name="country" value></td>
			</tr>
			<tr>
				<td><input type="submit"  value="update"></td>
			</tr>
		


		</table>
	</form>
</body>
</html>