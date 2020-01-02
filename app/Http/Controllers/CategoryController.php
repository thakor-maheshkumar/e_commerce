<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
    public function index()
    {
    	$data['category']=Category::all();
    	return view('category/list',$data);
    }
    public function add()
    {
    	return view('category.add');
    }
    public function store(CategoryRequest $request)
    {
        $validated=$request->validated();
    	$category=new Category;
    	$category->name=$request->name;
    	$category->description=$request->description;
    	$category->save();
    	return redirect('category/list')->with('success','category successfully store');
    }
    public function edit($id)
    {
        $data['category']=Category::find($id);
        return view('category/edit',$data);
    }
    public function update(Request $request,$id)
    {
        $categorys=Category::find($id);
        $categorys->name=$request->name;
        $categorys->description=$request->description;
        $categorys->save();
        return redirect('category/list')->with('success','category successfully update');
    }
    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('category/list')->with('danger','category successfully delete');
    }
}
