<!DOCTYPE html>
<html>
<head>
</head>
<body>
	

	<form action="{{ url('studentForm') }}" method="get">	
		 {{ csrf_field() }}

		<table>

			<th>
				<h3>Student Registration Form</h3>
			</th>

			<tr>
				<td>Name :</td>
				<td><input type="text" name="name"></td>
			</tr>
		

			<tr>
				<td>EmailId : </td>
				<td><input type="email" name="email"></td>
			</tr>



			<tr>
				<td>City : </td>
				<td><input type="text" name="city"></td>
			</tr>
			
			<tr>
				<td>Country : </td>
				<td><input type="text" name="country"></td>
			</tr>
			<tr>
				<td><input type="submit"  value="Insert"></td>
			</tr>
		


		</table>
	</form>
</body>
</html>