<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('getBear') }}" method="get">
		 {{ csrf_field() }}
		<table>

			<tr>
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>type</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td>danger_level</td>
				<td><input type="text" name="danger_level"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>

		</table>
	</form>
</body>
</html>