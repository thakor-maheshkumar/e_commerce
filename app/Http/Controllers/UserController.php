<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;
use Cart;
use App\Address;
use App\Order;
use Auth;
use App\ProductOrder;
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
        //$data['cart']=ProductOrder::with('order')->get();
        //dd($data);
        $data['cartItems']=Cart::getContent();
        $data['cart']=Order::all();

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
    public function add(){
        return view('user.add');
    }
    public function store(Request $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        emotify('success', ' user successfully inserted');
        return redirect('user/list');
    }
    public function delete($id)
    {
        $data=User::find($id)->delete();
        return redirect()->back();
    }
    public function record(Request $request,$id)
    {
        $data['record']=Product::where('category_id',$id)->get();
        return view('front.record',$data);
    }
    public function orderstore(Request $request)
    {
        $order=New Order();
        $order->user_id=Auth::user()->id;
        $order->alltotal=$request->alltotal;
        $productName=$request->get('pname');
        $productPrice=$request->get('price');
        $order->save();
        foreach($productName as $key=>$value) 
        {
            $productOrder=New ProductOrder();
            $productOrder->pname=$value;
            $productOrder->price=$productPrice[$key];
            $productOrder->user_id=Auth::user()->id;
            $productOrder->order_id=$order->id;
            $productOrder->save();
        }
        return redirect()->back();
    }
}
