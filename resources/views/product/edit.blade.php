@extends('master.app')
@section('content')
<div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Elements</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Product Form</h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                 <form method="post" action='{{url("product/update/{$product->id}")}}' enctype="multipart/form-data">
                                                	@csrf
                                                    <div class="form-group mb-3">
                                                       <select class="form-control" name="category_id">
                                                           <option>Select Category</option>
                                                           @foreach($category as $categorys)
                                                           <option value="{{$categorys->id}}"@if($categorys->id==$product->category_id) selected @endif>{{$categorys->name}}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="simpleinput">Product Name</label>
                                                        <input type="text" id="pname" name="pname" class="form-control" placeholder="Product name" value="{{$product->pname}}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="simpleinput">Price</label>
                                                        <input type="text" id="price" name="price" class="form-control" placeholder="Price" value="{{$product->price}}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="simpleinput">Image</label>
                                                        @if("images/{{product->image}}")
                                                        <img src="{{URL::to('/')}}/images/{{$product->image}}" width="80">
                                                        @endif
                                                        <input type="file" name="image"> 
                                                    </div>
       												
                                                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                                </form>
                                            </div> <!-- end col -->

                                             <!-- end col -->
                                        </div>
                                        <!-- end row-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        
                    </div>
@endsection