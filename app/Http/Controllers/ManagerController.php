<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
class ManagerController extends Controller
{
    public function index()
    {
    	return view('manager.list');
    }
    public function store(Request $request)
    {
    	//$dataImage=$request->file('image');
    	$dataImage=$request->file('image');
    	//dd($dataImage);
    	$new_image=rand().'.'.$dataImage->getClientOriginalExtension();
    	$dataImage->move(public_path('images'),$new_image);

    	$manager=new Manager();
    	$manager->name=$request->name;
    	$manager->gender=$request->gender;
    	$manager->hobby=implode(',',$request->hobby);
    	$manager->state=implode(',',$request->state);
    	$manager->image=$new_image;
    	$manager->save();
    	

    }
    public function getdata(Request $request)
    {
        $data=Manager::all();
        return json_encode(array('data'=>$data));
    }
    public function editdata(Request $request)
    {
        if($request->ajax())
        {
            return response(Manager::find($request->id));
        }
    }
}
