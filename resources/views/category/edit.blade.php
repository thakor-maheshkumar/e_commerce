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
                                        <h4 class="header-title">Input Types</h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form method="post" action='{{url("category/update/{$category->id}")}}'>
                                                	@csrf
                                                    <div class="form-group mb-3">
                                                        <label for="simpleinput">Category</label>
                                                        <input type="text" id="name" name="name" class="form-control" value="{{$category->name}}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="example-textarea">Text area</label>
                                                        <textarea class="form-control" id="description" name="description" rows="5">{{$category->description}}</textarea>
                                                    </div>
       												<button class="btn btn-success">Submit</button>
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