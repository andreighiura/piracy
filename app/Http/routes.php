<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('contactapppost/', 'ContactController@store');
Route::get('newsapp','NewsController@index');
Route::post('userapppost/', 'UserController@store');
Route::get('userapp/{id}','UserController@show');
Route::get('userapp','UserController@index');
Route::get('questapp/{id}','QuestController@index');
Route::post('questapppost/','QuestController@update');
Route::get('/adm1n', function () {

   return view('admin');

});
Route::get('/', function () {

   return view('welcome');

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
