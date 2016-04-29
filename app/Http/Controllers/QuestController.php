<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quest;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class QuestController extends Controller
{
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index($id)
{
// get all the nerds

	return Quest::where('user_id',$id)->get();
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create($user_id)
{

}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function update(Request $request)
{
	$quest=Quest::find($request->input('id'));
	$quest->imgur_url=$request->input('url');
	$quest->save();


        //return $user;


       //return  $request->input('nameFL');
    }

public function destroy($id)
{
//
}
}