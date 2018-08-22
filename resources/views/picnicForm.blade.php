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

	<div><a href="bearForm.blade.php">BearForm</a></div>
	<div><a href="fishForm.blade.php">FishForm</a></div>
	<div><a href="treeForm.blade.php">TreeForm</a></div>

</body>
</html>