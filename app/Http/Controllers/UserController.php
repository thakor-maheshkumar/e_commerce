<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;
use Cart;
use App\Address;
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
        $data['cartItems']=Cart::getContent();
       // echo "<pre>";print_r((array)$data);die;
        return view('front.cart',$data);
    }
    public function addItem($id)
    {
        $product=Product::find($id);
       //Cart::add($id,$product->pname,$product->quantity,$product->price,$product->image);
        Cart::add(array('id'=>$product->id,
                        'name'=>$product->pname,
                        'quantity'=>$product->quantity,
                        'price'=>$product->price,
                        'image'=>$product->image));
        return redirect()->back();
    }
    public function cartremove($id)
    {
        $data=Cart::remove($id);
        return redirect()->back();
    }
    public function subtotal()
    {
        $data['subtotal'] = Cart::getSubTotal();
        return view('front.app',$data);
    }
    public function createaddress()
    {
        return view('user.createaddress');
    }
    public function storeaddress(Request $request)
    {
        $address=new Address();
        $address->pincode=$request->pincode;
        $address->name=$request->name;
        $address->address=$request->address;
        $address->landcart=$request->landcart;
        $address->city=$request->city;
        $address->state=$request->state;
        $address->mobile=$request->mobile;
        $address->alternet=$request->alternet;
        $address->type=$request->type;
        $address->save();
        return redirect('user/showdetail');
    }
    public function showdetail()
    {
        //$data['product']=Product::all();
        $data['detail']=Address::all();
        $data['cartItems']=Cart::getContent();
        return view('user.showdetail',$data);
    }
}
