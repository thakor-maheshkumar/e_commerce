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
                                	<a href="{{url('category/add')}}" class="btn btn-primary">Add Category</a>
                                          
        
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($category as $categorys)
                                            <tr>
                                                <td scope="row">{{$categorys->id}}</td>
                                                <td>{{$categorys->name}}</td>
                                                <td>{{$categorys->description}}</td>
                                                <td>
                                                	<a class="btn btn-success" href='{{url("category/edit/{$categorys->id}")}}'>Edit</a>
                                                	<a class="btn btn-danger" href='{{url("category/delete/{$categorys->id}")}}'>Delete</a>
                                                </td>
                                            </tr>
                                            	@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        <!-- end col -->
                        </div>
                        <!--- end row -->
        
        
                        
                        <!-- end row -->
        
        
                        
                        <!-- end row -->
        
                        
                        <!-- end row -->
        
        
                       
                        <!--- end row -->
        
                        
                        <!--- end row -->        
                        
                    </div>
@endsection