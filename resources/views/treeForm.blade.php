<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('getTree') }}" method="get">
		 {{ csrf_field() }}
		
		<table>
			<tr>
				
				<td>type</td>
				<td><input type="checkbox" name="type" value="large" >large
					<input type="checkbox" name="type" value="small">small					
					<input type="checkbox" name="type" value="medium">medium
				</td>	
			</tr>
			<tr>
				<td>age</td>
				<td><input type="text" name="age"></td>
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