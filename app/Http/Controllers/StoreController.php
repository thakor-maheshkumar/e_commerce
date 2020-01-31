<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Store;
use App\Product;
use DB;
class StoreController extends Controller
{
    public function storedata()
    {
    	$data['store']=Category::all();
        $data['price']=Product::all();
    	return view('store/view',$data);
    }
    public function store(Request $request)
    {
        $categoryname=$request->get('name');
        $categoryprice=$request->get('price');
        //dd($categoryname,$categoryprice);
        foreach ($categoryname as $key => $value) {
            


            $insertCategory=new Store();
            $insertCategory->name=$value;
            $insertCategory->price=$categoryprice[$key];
            $insertCategory->save();

        }
                //$ab=array_combine($store,$stor);

    }
}
