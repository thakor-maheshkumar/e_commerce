<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
class NewController extends Controller
{
    public function index()
    {
    	return view('new.list');
    }
    public function store(Request $request)
    {
    	$content=New Content();
    	$content->name=$request->name;
    	$content->email=$request->email;
    	$content->address=$request->address;
    	$content->save();

    }
    public function getDatalist()
    {
    	$data=Content::all();
    	return json_encode(array('data'=>$data));
    }
    public function newedit(Request $request)
    {
    	if($request->ajax())
    	{
    		return response(Content::find($request->id));
    	}
    }
    public function newupdate(Request $request)
    {
    	if($request->ajax()){
    		$con=Content::find($request->id);
    		$con->name=$request->name;
    		$con->email=$request->email;
    		$con->address=$request->address;
    		$con->save();
    		return response(['msg'=>'successfully update']);
    	}
    }
}
