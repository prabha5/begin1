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

		DB::table('Student')
			->insert(['name'=>$name,'email'=>$email,'city'=>$city,'country'=>$country]);

		$student=DB::table('Student')->get();
		return redirect('listStudent');
	}

	public function listStudent(Request $req)
	{

		$student=DB::table('Student')->get();
		$stud['liststudent']=$student;	

		return view('ListStudent',$stud);
	}

	public function editStudent($id)
	{

		$table=DB::table('Student')
					->select('id','name','email','city','country')
					->where('id', $id)
					->first();

		$stud['student']=$table;

		return view('EditStudent',$stud);
		
	}

	public function updateStudent(Request $req)
	{ 
		$id=$req->input('id');
		$name=$req->input('name');
		$email=$req->input('email');
		$city=$req->input('city');
		$country=$req->input('country');

		DB::table('Student')
            	->where('id',$id)
            	->update(['name'=>$name,'email'=>$email,'city'=>$city,'country'=>$country]);

        return redirect('listStudent');
	}

	public function deleteStudent($id)
	{
		$delete=DB::table('Student')
            		->where('id',$id)
            		->delete();

        return redirect('listStudent');
	}

	/*public function studentMark($id)
	{
		$studenttable=DB::table('Student')->select('id')
										 ->where('id', $id)
										 ->first();

		$stud['student']=$studenttable;

		return view('InsertMark',$stud);

	}*/


	public function insertMark(Request $req)
	{

		$student_id=$req->input('student_id');
		$physics=$req->input('physics');
		$chemistry=$req->input('chemistry');
		$maths=$req->input('maths');
		$cse=$req->input('cse');
		$total=$physics+$chemistry+$maths+$cse;

		

		DB::table('Marklist')
			->insert(['student_id'=>$student_id,'physics'=>$physics,'chemistry'=>$chemistry,'maths'=>$maths,'cse'=>$cse,'total'=>$total]);

		$student=DB::table('Marklist')->get();
	
		return redirect('listStudent');
	}

	public function view()
	{
		
        $users =DB::table('Marklist')
          			->join('Student', 'Student.id', '=', 'Marklist.Student_id')
                	->orderBy('total', 'desc')
                	->select('Student.name','Student.email','Marklist.total')
                	->get();


		$mark['mark']=$users;

		return view('viewMark',$mark);
   
          // dd($users);
	}

	public function editMark($id)
	{

		$table=DB::table('Marklist')
					->select('marks_id','student_id','physics','chemistry','maths','cse','total')
					->where('student_id', $id)
					->first();
	
		$stud['student']=$table;

		if(!$table)
		{
			return view('Markno',['id'=>$id]);
		}

		return view('updateMark',$stud);
		
	}
	
	public function updateMark(Request $req)
	{

			
		$student_id=$req->input('student_id');
		$physics=$req->input('physics');
		$chemistry=$req->input('chemistry');
		$maths=$req->input('maths');
		$cse=$req->input('cse');
		$total=$physics+$chemistry+$maths+$cse;
	
		DB::table('Marklist')
		    	->where('student_id',$student_id)
				->update(['physics'=>$physics,'chemistry'=>$chemistry,'maths'=>$maths,'cse'=>$cse,'total'=>$total]);

		$student=DB::table('Marklist')->get();
	
		return redirect('listStudent');


	}


}