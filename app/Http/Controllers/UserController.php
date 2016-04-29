<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
// get all the nerds
return User::all();
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
//
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store(Request $request)
{

	$user=User::Create([
			'username'       => $request->input('username'),
			'password'       => $request->input('password'),
			'id'             => $request->input('idFL'),
			'name'           => $request->input('nameFL'),
			'email'          => $request->input('emailFL'),
			'lol_name'       => $request->input('lolFL'),
			'steam_name'     => $request->input('csgoFL'),
			'battlenet_name' => $request->input('hsFL'),
			'battlenet_pct'  => '0',
			'lol_pct'        => '0',
			'steam_pct'      => '0',
			'gen_pct'        => '0'
     		]); 


        //return $user;


       //return  $request->input('nameFL');
    }
/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
	//return $id;
	return User::find($id);
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
//
}
/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
//
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
//
}
}