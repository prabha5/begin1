<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



use App\models\Bear;
use App\models\Fish;
use App\models\Tree;
use App\models\picnic;
use DB;

class BearRelationController extends Controller
{ 
	
	public function bear()
	{
		$select=DB::table('bears')->join('fish',3,'=','fish.bear_id');
		//$select=Bear::with('fish')->get();
		//$select=DB::table('bears')->get();
		dd($select);
		//return view('bearForm');
	}
	public function getBear(Request $req)

	{   
		/*$req=Bear::where('name','=','sweety')->first();
		$fish=$req->fish;
		$fish->weight;
		$fish->fish->weight;*/

		$bear=new Bear;

		$bear->name=$req->name;
		$bear->type=$req->type;
		$bear->danger_level=$req->danger_level;
		$bear->save();

		dd($bear->all());

	}

	public function fish(Request $req)
	{

		/*$fish=Fish::firstOrCreate(['weight'=>20,'bear_id'=>9]);
		$fish->weight=10;
		$fish->bear_id=2;*/
		//$fish=Fish::truncate();
     

		//$fish->save();

		//dd($fish->all());
		return view('fishForm');
	}
	public function getFish(Request $req)

	{
		$fish=new Fish;

		$fish->weight=$req->weight;
		$fish->bear_id=$req->bear_id;
		/*$fish=Fish::find(1);
		$fish->weight=$req->weight;
		$fish->bear_id=$req->bear_id;*/
		/*$fish=Fish::firstOrCreate(['weight'=>30,'bear_id'=>3]);
		$fish->weight=$req->weight;
		$fish->bear_id=$req->bear_id;*/
     

		$fish->save();

		dd($fish->all());
	}

	public function tree()
	{
		return view('treeForm');
	}
	public function getTree(Request $req)

	{
		$tree=new Tree;
		$tree->type=$req->type;
		$tree->age=$req->age;
		$tree->bear_id=$req->bear_id;

		$tree->save();

		dd($tree->all());
	}

	public function Picnics()
	{
		return view('picnicForm');
	}
	public function getPicnic(Request $req)

	{
		$picnic=new picnic;
		$picnic->name=$req->name;
		$picnic->taste_level=$req->taste;
	
		$picnic->save();

		dd($picnic->all());
	}


   
}



?>
