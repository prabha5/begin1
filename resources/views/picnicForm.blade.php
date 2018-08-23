<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('getPicnic') }}" method="get">
		 {{ csrf_field() }}
		<table>
			<tr>
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>taste_level</td>
				<td><input type="text" name="taste"></td>
			</tr>
				<td>		
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>