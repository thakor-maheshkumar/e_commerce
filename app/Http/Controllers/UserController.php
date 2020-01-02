<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
    	$data['user']=User::where('name','!=','admin')->get();
    	return view('user/list',$data);
    }
    public function dashboard()
    {
    	return view('user/dashboard');
    }
}
