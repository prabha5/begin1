<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use Validator;

class StudentDetail extends Controller
{
	
	public function studentform()
	{
		return view('StudentForm');
	}


	/*public function viewform(StoreBlogPost $req)
	{  
		 $validate=$req->validater();

		
 
		$fname=$req->input('firstname');
		$lname=$req->input('lastname');
		$email=$req->input('emailid');
		$mobileno=$req->input('mobileno');
		$sex=$req->input('sex');
		$course=$req->input('Course');
		$dob=$req->input('dob');
		$ddress=$req->input('address');
		$state=$req->input('State');
		$password=$req->input('password');
		$rpassword=$req->input('rpassword');

		echo "<table>";
		echo "<tr>
				<td>FirstName :</td>
				<td>$fname</td>
			 </tr>";

		echo "<tr>
				<td>LastName :</td>
				<td>$lname</td>
			</tr>";

		echo "<tr>
				<td>EmailId :</td> 
				<td>$email</td>
			</tr>";

		echo "<tr>
				<td>MobileNo :</td>
				<td>$mobileno</td>
			 </tr>";

		echo "<tr>
				<td>Sex :</td> 
				<td>$sex</td>
			 </tr>";

		echo "<tr>
				<td>Course :</td>
				<td>$course</td>
			  </tr>";

		echo "<tr>
				<td>DOB :</td>
				<td>$dob</td>
			  </tr>";

		echo "<tr>
				<td>Address :</td>
				<td>$ddress</td>
			 </tr>";

		echo "<tr>
				<td>State :</td>
				<td>$state</td>
			 </tr>";

		 echo "<tr>
			<td>password :</td>
			<td>$password</td>
		 </tr>";


		  echo "<tr>
			<td>confirm password :</td>
			<td>$rpassword</td>
		 </tr>";

		echo "<table>";


	}*/
	public function viewform(Request $req)
	{
		/*$validator = Validator::make($req->all(), [
					    'firstname' => 'required|max:5',
				        'lastname' => 'required|max:5',
				        'emailid' => 'required',
				        'mobileno'=>'integer|required',
				        'password'=>'required|min:6',
				        'rpassword'=>'required|min:6',
				        
				           
        ]);

        if ($validator->fails()) {
            return redirect('StudentForm')
                        ->withErrors($validator)
                        ->withInput();
        }
   
           //$data  =session()->put('firstname',request()->firstname);
          //$value  =session()->get('firstname');*/
         //session()->flash('status','task successful');
        //session()->flash('sname','task ');
       //$req1=session()->flash('firstname','prabha');
      //session()->reflash();
        session()->keep('status');
      echo session('status');
      echo session('sname');

    

	}

}
