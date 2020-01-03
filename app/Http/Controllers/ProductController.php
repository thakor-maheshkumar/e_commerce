<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    public function index()
    {
    	$data['product']=Product::with('category')->get();
    	return view('product/list',$data);
    }
    public function add()
    {
    	$data['category']=Category::all();
    	return view('product/add',$data);
    }
    public function store(ProductRequest $request)
    {
        $validated=$request->validated();
    	$image=$request->file('image');
    	$new_image=rand().'.'.$image->getClientOriginalExtension();
    	$image->move(public_path('images'),$new_image);
    	$product=new Product;
    	$product->category_id=$request->category_id;
    	$product->pname=$request->pname;
    	$product->price=$request->price;
        $product->quantity=$request->quantity;
    	$product->image=$new_image;
        $product->status=$request->status;
    	$product->save();
    	return redirect('product/list')->with('success','product inserted successfully');
    }
    public function edit($id)
    {
    	$data['category']=Category::all();
    	$data['product']=Product::find($id);
    	return view('product.edit',$data);
    }
    public function update(Request $request,$id)
    {
    		$productsa=Product::find($id);
    		$productsa->category_id=$request->category_id;
    		$productsa->pname=$request->pname;
    		$productsa->price=$request->price;
            $productsa->quantity=$request->quantity;
            $productsa->status=$request->status;
    	if($image=$request->file('image'))
    	{
    		$image=$request->file('image');
    		$new_image=rand().'.'.$image->getClientOriginalExtension();
    		$image->move(public_path('images'),$new_image);
    		$productsa->image=$new_image;
    		$productsa->save();
    		return redirect('product/list')->with('success','product update successfully');
    	}
    	else
    	{
    		$productsa->save();
    		return redirect('product/list');	
    	}
    }
    public function delete($id)
    {
        $product=Product::find($id)->delete();
        return redirect('product/list')->with('danger','product delete successfully');
    }
}
