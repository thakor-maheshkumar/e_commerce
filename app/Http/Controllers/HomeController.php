<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function ajaxRequest()
    {
        return view('ajax.ajaxrequest');
    }
    public function ajaxrequestdata(Request $request)
    {
        $input=$request->all();
        return response()->json(['success'=>'Got Simple Ajax Request']);
    }
    public function validation()
    {
        return view('ajax.validation');
    }
    public function validations(Request $request)
    {
        
    }
    public function bookpro()
    {
        $data['city']=City::get('city');
        return view('mp.bookpro',$data);
    }
    public function getcity(Request $request)
    {
        $name=$request->city;
        $data['city']=City::where('city','LIKE',$name.'%')->get()->toArray();
        return response(json_encode(array('data'=>$data)));
    }
    public function getdate()
    {
        $data['city']=City::all();
        return view('mp.getdate',$data);
    }
}
