<!DOCTYPE html>
<html>
<head>
</head>
<body>
	

	<form action="{{ url('insertMark') }}" method="post">	
		 {{ csrf_field() }}

		<table>

			<th>
				<h3>Student Mark Form</h3>
			</th>

			<tr>
				<td>studentId</td>
				<td><input type="text" name="student_id" value="{{$id}}"></td>
			</tr>
		

			<tr>
				<td>physiscs : </td>
				<td><input type="text" name="physics"></td>
			</tr>

			<tr>
				<td>chemistry : </td>
				<td><input type="text" name="chemistry"></td>
			</tr>
			<tr>
				<td>maths : </td>
				<td><input type="text" name="maths"></td>
			</tr>
			
			<tr>
				<td>cse: </td>
				<td><input type="text" name="cse"></td>
			</tr>

			<tr>
				<td><input type="submit"  value="Insert"></td>
			</tr>
		

		</table>
	</form>
	<a href='{{url("listStudent")}}'><input type="submit" value="cancel"></a>
</body>
</html>