<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('getbeared') }}" method="post">
		 <input type="hidden" name="" value="{{ csrf_field() }}">
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
	<div><a href="fishForm.blade.php">BearForm</a></div>
	<div><a href="treeForm.blade.php">TreeForm</a></div>
	<div><a href="picnicForm.blade.php">PicnicForm</a></div>

</body>
</html>