<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
class AjaxController extends Controller
{
    public function list()
    {
    	return view('ajax.list');
    }
    public function create()
    {
    	return view('ajax.create');
    }
    public function store(Request $request)
    {
    	if($request->ajax()){
    	$detail=new Detail();
    	$detail->name=$request->name;
    	$detail->email=$request->email;
    	$detail->address=$request->address;
    	$detail->gender=$request->gender;
    	$detail->hobby=$request->hobby;
    	$detail->save();
    	return redirect('ajax/list');
    	}
    
    }
    public function listdata()
    {
    	$data=Detail::all();
    	return json_encode(array('data'=>$data));	
    }
    public function editdata(Request $request)
    {
    if($request->ajax())
        {
            return response(Detail::find($request->id));
        }        
    }
}
