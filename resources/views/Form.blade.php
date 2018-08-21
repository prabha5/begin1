<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>

	<form action="{{ url('addForm') }}" method="post">
		 {{ csrf_field() }}
		<table>
			<tr>
				<td>name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>price:</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
	</form>



</body>
</html>
