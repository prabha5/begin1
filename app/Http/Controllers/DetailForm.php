<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
 
 class DetailForm extends Controller

{
	
	public function testForm()
	{

    	return view('Form');

    } 

    public function addForm(Request $req)
    {

    	dd($req->all());
	
	}


 

}