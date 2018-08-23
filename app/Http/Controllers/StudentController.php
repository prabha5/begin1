<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class StudentController extends Controller
{
	public function studentdetail()
	{

		//$student=DB::table('Student')->insert(['name'=>'revathi','email'=>'revathi@gmail.com','city'=>'madhurai','country'=>'tamilnadu']);
		//$student=DB::table('Student')->get();
		//$student=DB::table('Student')->where('id','=',2)->get();
		//$student=DB::table('Student')->where('id', 1)->update(['name' => 'prabhakaran']);
		//$student=DB::table('Student')->where('id',3)->delete();


		dd($student);
		
	}
	public function FormStudent()
	{
		return view('StudentDetail');

	}
	public function studentForm(Request $req)
	{
		$name=$req->input('name');
		$email=$req->input('email');
		$city=$req->input('city');
		$country=$req->input('country');

		DB::table('Student')->insert(['name'=>$name,'email'=>$email,'city'=>$city,'country'=>$country]);

		$student=DB::table('Student')->get();
		dd($student);
	}
	public function listStudent(Request $req)
	{
		$student=DB::table('Student')->get();

		$stud['liststudent']=$student;
		
		return view('ListStudent',$stud);

	}
}