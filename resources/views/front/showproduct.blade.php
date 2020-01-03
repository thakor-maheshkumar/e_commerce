@extends('front.app')
@section('content')

<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<img src="{{URL::to('/')}}/images/{{$show->image}}" width="500" height="300">
		</div>
		<div class="col-md-6">
			<p style="font-size: 25px;color:maroon">{{$show->pname}}</p>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<hr>
			 <b style="font-size: 30px">Rs {{$show->price}}</b>
			 <hr>
			 <button class="btn btn-primary">Buy Now</button>
			 <a class="btn btn-danger" style="margin-left: 25px" href='{{url("cart/addItem/{$show->id}")}}'>Add Cart</a>
			 <hr>
			 <a href="{{url('user/dashboard')}}" class="btn btn-success">Back</a>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>

@endsection