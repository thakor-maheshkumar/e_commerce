<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request)
    {
    	if($request->session()->has('thakor'))
    		echo $request->session()->get('thakor');
    	else
    		echo 'No data in the session';
    }
    public  function storeSessionData(Request $request)
    {
    	$request->session()->put('thakor','King Khan');
    	echo "Data has been added in the session";
    }
    public function deleteSessionData(Request $request)
    {
    	$request->session()->forget('my_name');
    	echo "Data has been removed from session";
    }
}
