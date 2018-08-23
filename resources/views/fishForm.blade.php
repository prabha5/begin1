<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('getFish') }}" method="get">
	 {{ csrf_field() }}
		<table>
			<tr>
				<td>weight</td>
				<td><input type="radio" name="weight" value="10">10kg
					<input type="radio" name="weight" value="20">20kg
				</td>			
			</tr>
			<tr>
				<td>bear_id</td>
				<td><input type="text" name="bear_id"></td>
				
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