<?php


dd($liststudent);
@foreach ($liststudent as $stu) 
	{{$stu->id}}
	{{$stu->name}}
	{{$stu->email}}
	{{$stu->city}}
	{{$stu->country}}
@endforeach
?>