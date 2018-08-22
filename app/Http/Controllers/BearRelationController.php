<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\models\Bear;
use App\models\Fish;
use App\models\Tree;
use App\models\picnic;

class BearRelationController extends Controller
{ 
	public function bearinsert()
	{
		$bear=new Bear;
		$bear->name='supercool';
		$bear->type='anger';
		$bear->danger_level=3;
		$bear->save();

		dd($bear);
	}
	public function fishinsert()
	{
		$fish=new Fish;
		$fish->weight=20;
		$fish->bear_id=4;
		$fish->save();
		dd($fish);
	}
	public function treeinsert()
	{
		$tree=new Tree;
		$tree->type='small';
		$tree->age=10;
		$tree->bear_id=4;
		$tree->save();
		dd($tree);
	}
	public function insertpicnic()
	{
		$pic=picnic::find(1);
		$pic->name='ab';
		
		$pic->save();
		dd($pic);
	}
	public function beared()
	{
		return view('bearForm');
	}
	public function getbeared()

	{
		 $name=request()->name;
		 $type=request()->type;
		 $danger=request()->danger_level;

		 $bear=new Bear;

		$bear->name='$name';
		$bear->type='$type';
		$bear->danger_level='$danger_level';
			$bear->save();

		
		
		/*
		$fname=$req->all();
		dd($fname);*/
		//$bear=Bear::find($req->all());
		///$bear->save();
		//dd(request->all());

	}

   
}



?>
