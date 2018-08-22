<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="hidden" name="" value=" {{ csrf_field() }}">
		<table>
			<tr>
				<td>weight</td>
				<td><input type="checkbox" name="weight" >10kg
					<input type="checkbox" name="weight">20kg
				</td>			
			</tr>
			<tr>
				<td>bear</td>
				<td><select name=bear>
					
				<option value=" " selected>select</option>
				<option value="sweety">sweety</option>
				<option value="polar">polar</option>
				<option value="cool">cool</option>
				</select></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
	<div><a href="bearForm.blade.php">BearForm</a></div>
	<div><a href="treeForm.blade.php">TreeForm</a></div>
	<div><a href="picnicForm.blade.php">PicnicForm</a></div>

</body>
</html>