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

Route::get('StudentForm','StudentDetail@studentform');



Route::get('beared','BearRelationController@beared');
Route::get('getbeared', 'BearRelationController@getbeared');











