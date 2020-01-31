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
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Input Types</h4>
                                                <form method="post" action="{{url('storedata/store')}}">
                                                @foreach($store as $stores)
                                                    @csrf
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="simpleinput">Category</label>
                                                        <input type="text" id="name" name="name[]" class="form-control" value="{{$stores->name}}">
                                                        
                                                    </div>
                                                </div>
                                                @endforeach
                                          
                                            @foreach($price as $prices)
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="simpleinput">Price</label>
                                                        <input type="text" id="name" name="price[]" class="form-control" value="{{$prices->price}}">
                                                    </div>
                                            </div>
                                            @endforeach  <!-- end col -->
                                            <button class="btn btn-success">submit</button>
                                            </form>
                                             <!-- end col -->
                                    
                                        <!-- end row-->

                                    </div>
                                      </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        
@endsection