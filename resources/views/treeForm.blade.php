<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url() }}" method="post">
		 <input type="hidden" name="" value="{{ csrf_field() }}">
		<table>
			<tr>
				<td>type</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>age</td>
				<td><input type="text" name="type"></td>
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

	<div><a href="bearForm.blade.php">BearForm</a></div>
	<div><a href="fishForm.blade.php">BearForm</a></div>

</body>
</html>