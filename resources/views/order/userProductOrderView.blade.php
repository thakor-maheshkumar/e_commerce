@extends('front.app')
@section('content')
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
                                    <h4 class="page-title">Product View</h4>
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
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Id</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Created_at</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><img src="{{URL::to('/')}}/images/{{$userProduct->image}}" width="80"></td>
                                                <td>{{$userProduct->id}}</td>
                                                <td>{{$userProduct->pname}}</td>
                                                <td>{{$userProduct->price}}</td>
                                                <td>{{$userProduct->quantity}}</td>
                                                <td>{{$userProduct->created_at}}</td>
                                                <td><a class="btn btn-warning" href='{{url("user/productOrderView/{$userProduct->id}")}}'>Edit</button></td>
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>                        
                    </div>
@endsection