@extends('master.app')
@section('content')
<h2>Category Table</h2>
<div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Basic</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Tables</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-md-4">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                     @if(Session::has('danger'))
                                     <div class="alert alert-danger">{{Session::get('danger')}}</div>
                                     @endif
                                </div>
                                <div class="card-box">
                                	<a href="{{url('product/add')}}" class="btn btn-primary">Add Product</a>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Name</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product as $products)
                                            <tr>
                                                <td>{{$products->id}}</td>
                                                <td>{{$products->category->name}}</td>
                                                <td>{{$products->pname}}</td>
                                                <td>{{$products->price}}</td>
                                                <td>{{$products->quantity}}</td>
                                                <td>
                                                    <img src="{{URL::to('/')}}/images/{{$products->image}}" width="80">
                                                </td>
                                                <td>{{$products->status}}</td>
                                                <td>
                                                    <a href='{{url("product/edit/{$products->id}")}}' class="btn btn-success">Edit</a>
                                                    <a href='{{url("product/delete/{$products->id}")}}' class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>                        
                    </div>
@endsection