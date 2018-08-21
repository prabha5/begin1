<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class StudentDetail extends Controller
{
	
	public function studentform()
	{
		return view('StudentForm');
	}


	public function viewform(Request $req)
	{
 
		$fname=$req->input('firstname');
		$lname=$req->input('lastname');
		$email=$req->input('emailid');
		$mobileno=$req->input('mobileno');
		$sex=$req->input('sex');
		$course=$req->input('Course');
		$dob=$req->input('dob');
		$ddress=$req->input('address');
		$state=$req->input('State');

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
		echo "<table>";


		
	}

}
