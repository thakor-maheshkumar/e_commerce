<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;
//use Gloudemans\Shoppingcart\Facades\Cart;
class UserController extends Controller
{
    public function index()
    {
    	$data['user']=User::where('name','!=','admin')->get();
    	return view('user/list',$data);
    }
    public function dashboard()
    {
    	$data['category']=category::all();
    	$data['product']=Product::all();
    	return view('front/dashboard',$data);
    }
    public function productcategory(Request $request)
    {
    	$cate_id=$request->category_id;
    	$price=count((array)$request->price);
    	if($price!="0")
    	{
    		$price=explode("-",$request->price);
    		$start=$price[0];
    		$end=$price[1];

    	}
    	else if($cate_id!="")
    	{

    	}
    	else if($cate_id!="" && $price!="0")
    	{

    	}
    	else
    	{
    		echo "nothing is selected";
    	}
    	$data['product']=Product::join('categories','categories.id','products.category_id')
    								->where('products.category_id',$cate_id)
    								->get();
    		return view('front.category',$data);
    }
    public function showproduct($id)
    {
        $data['show']=Product::find($id);
        return view('front.showproduct',$data);
    }
    public function cartproduct()
    {
        return view('front.cart');
    }
    public function cartitem()
    {
        $data['cartItems']=Cart::content();
        return view('front.cart',$data);
    }
    public function addItem($id)
    {
        $product=Product::find($id);
        //Cart::add($id,$product->pname,$product->quantity,$product->price,$product->image);
        return redirect('cart/product');
    }
}
