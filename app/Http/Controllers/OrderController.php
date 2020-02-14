<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductOrder;
use Auth;
class OrderController extends Controller
{
    public function placeorder()
    {
    	return view('order.placeorder');
    }
    public function productOrder()
    {
    	//$data['order']=Order::all();
    	$data['productOrder']=ProductOrder::with('order')->get();
    	//dd($data);
    	return view('order.productOrder',$data);
    }
    public function userProductOrder()
    {
    	$data['productOrder']=ProductOrder::with('order')->where('user_id',Auth::id())->get();
    	return view('order.userProductOrder',$data);
    }
    public function userProductOrderView($id)
    {
        $data['userProduct']=ProductOrder::find($id);
        //dd($data);
        return view('order.userProductOrderView',$data);
    }
}
