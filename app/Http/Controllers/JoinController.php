<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\ProductOrder;
use App\Product;
class JoinController extends Controller
{
    public function userData(Request $request)
    {
    	
    	//$data['userJoin']=DB::table('users')->leftJoin('product_orders','users.id','=','product_orders.user_id')->get();
    	//$data['userJoin']=User::leftJoin('product_orders','users.id','=','product_orders.user_id')->addSelect('users.name','users.email','product_orders.pname',)->get();
    	$data['userJoin']=ProductOrder::where('order_id',1)->exists();
    	dd($data);
    	return view('join.user',$data);
    }
}
