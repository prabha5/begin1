<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/{id}', 'TestController@TestFun');

Route::get('Form', 'DetailForm@testForm');
Route::post('addForm', 'DetailForm@addForm');

//Route::get('StudentForm','StudentDetail@studentform');


Route::get('bear','BearRelationController@bear');
Route::get('getBear', 'BearRelationController@getBear');

Route::get('fish','BearRelationController@fish');
Route::get('getFish', 'BearRelationController@getFish');

Route::get('tree','BearRelationController@tree');
Route::get('getTree', 'BearRelationController@getTree');

Route::get('Picnics','BearRelationController@Picnics');
Route::get('getPicnic', 'BearRelationController@getPicnic');

Route::get('studentdetail','StudentController@studentdetail');

Route::get('stud','StudentController@FormStudent');
Route::get('studentForm','StudentController@studentForm');

Route::get('name','StudentController@listStudent');











