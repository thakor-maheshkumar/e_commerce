<div class="row">
@foreach($product as $products)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{asset('assets')}}/#"><img class="card-img-top" src="{{URL::to('/')}}/images/{{$products->image}}" width="200" height="200" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{asset('assets')}}/#">{{$products->pname}}</a>
                </h4>
                <h5>{{$products->price}}</h5>
                <p class="card-text">{{$products->pro_info}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          @endforeach
          </div>