@extends('master.app')
@section('content')
<h2>Category Table</h2>
@include('notify::messages')
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
                                
                                <div class="card-box">
                                	<a href="{{url('user/add')}}" class="btn btn-primary">Add User</a>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>Action </th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user as $users)
                                                <tr>
                                                    <td>{{$users->id}}</td>
                                                    <td>{{$users->name}}</td>
                                                    <td>{{$users->email}}</td>
                                                    <td>
                                                        <button class="btn btn-danger delete" 
                                                        data-id="{{$users->id}}">Delete</button>
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