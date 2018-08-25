<table   border=1px cellpadding=10>
	

	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>City</th>
		<th>Country</th>
		<th>Edit</th>
		<th>Delete</th>
	
	</tr>

	@foreach ($liststudent as $student) 
		<tr>
			<td>{{$student->id}}</td>
			<td><a href="{{url("/editMark/$student->id")}}">{{$student->name}}</a></td>
			<td>{{$student->email}}</td>
			<td>{{$student->city}}</td>
			<td>{{$student->country}}</td>
			<td>
				<a href="{{ url("/editStudent/$student->id") }}">Edit</a>
			</td>
			<td><a href="{{ url("deleteStudent/$student->id")}}">Delete</a></td>
			
		
		</tr>
		
	@endforeach
	

</table>

		<div><a href="{{url("FormStudent")}}">Add student</a></div>	
		<div><a href="{{url("view")}}">MarkBoard</a></div>
