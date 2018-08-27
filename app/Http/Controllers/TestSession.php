<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

use Session;


class TestSession extends Controller
{
	public function display()
	{
		print_r(Session::all());

	}
	
}