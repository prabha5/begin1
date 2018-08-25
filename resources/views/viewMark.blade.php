
<table border=1px cellpadding=10>
	

	<tr>
		
		<th>Name</th>
		<th>Email</th>
		<th>Total</th>
		<th>Rank</th>
		
	</tr>
	<?php $i=1; ?>
	@foreach ($mark as $student) 
		<tr>

			<td>{{$student->name}}</td>
			<td>{{$student->email}}</td>
			<td>{{$student->total}}</td>
            
			<td><?php if($student->total!=0){echo $i++;}?></td>
		</tr>
		
	@endforeach

</table>
<a href="{{url("listStudent")}}">StudentList</a>