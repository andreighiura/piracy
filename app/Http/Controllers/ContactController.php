<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class ContactController extends Controller
{
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
// get all the nerds
return News::all();
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

	$contact=Contact::Create([
			'name'            => $request->input('nameC'),
			'email'          => $request->input('emailC'),
			'phone'         => $request->input('phoneC'),
			'msg'      => $request->input('msgC')
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
	//return User::find($id);
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