@extends('front.app')
@section('content')

 <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <select class="form-control" id="cate">
            <option>Select Category</option>
            @foreach($category as $categories)
            <option value="{{$categories->id}}" id="cate{{$categories->id}}">{{$categories->name}}</option>
            @endforeach-->
          </select>
        </div>
        <div class="list-group">
          <select class="form-control" id="price">
           <option>Select Price</option>
           <option value=10-20>10-20</option>
           <option value=20-30>20-30</option>
           <option value="30-40">30-40</option>
          </select>
        </div>
        <button id="cli">Find</button>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('assets')}}/http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('assets')}}/http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('assets')}}/http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="{{asset('assets')}}/#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="{{asset('assets')}}/#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-3">
            <div class="nice-select">
              <span class="current">Shop Category</span>
              <ul class="list">
                <li class="option selected">Some Option</li>
                <li class="option">Some More Option</li>                
              </ul>

            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
              <select id="selectBox 2" class="form-control">
                <option value="">Price</option>
                <option value="Eye">Eye</option>
                <option value="eh">Eh</option>
                <option value="Oh">Oh</option>
                <option value="Hoop">Hoop</option>

              </select>
          </div>
        </div>
        <div id="slidingDiv" class="searchbox" style="margin-left: 630px">
            <form action="{{url('search')}}" method="post">
              @csrf
              <input type="text" name="searchbar">
              <i class="fa fa-search"></i>
            </form>
        </div>
        <br>
        <div id="productData">
        <div class="row">
          @if(count($product)=="0")
          <div class="col-md-12" align="center">
            <h1 align="center" style="margin: 20px">No Product found under </h1>
          </div>
          @else
          
          @foreach($product as $products)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href='{{url("show/product/{$products->id}")}}'><img class="card-img-top" src="{{URL::to('/')}}/images/{{$products->image}}" width="180" height="180" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{asset('assets')}}/#">{{$products->pname}}</a>
                </h4>
                <h5>{{$products->price}}</h5>
                <a href='{{url("show/product/{$products->id}")}}' class="btn btn-primary">view</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          @endforeach 
          @endif
          </div>

          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
@endsection