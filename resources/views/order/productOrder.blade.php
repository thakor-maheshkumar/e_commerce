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
                                                <th>Image</th>
                                                <th>User_id</th>
                                                <th>Order Id</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                           		<th>Price</th>
                                                <th>All Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($productOrder as $productOrders)
                                            <tr>
                                            	
                                                <td>{{$productOrders->id}}</td>
                                                <td><img src="{{URL::to('/')}}/images/{{$productOrders->image}}" width="80"></td>
                                                <td>{{$productOrders->user_id}}</td>
                                                <td>{{$productOrders->order_id}}</td>
                                                <td>{{$productOrders->pname}}</td>
                                                <td>{{$productOrders->quantity}}</td>
                                                <td>{{$productOrders->price}}</td>
                                                <td>{{$productOrders->order->alltotal}}</td>
                                                    
                                                <td>
                                                    <a href='#' class="btn btn-success">Edit</a>
                                                    <a href='#' class="btn btn-danger">Delete</a>
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