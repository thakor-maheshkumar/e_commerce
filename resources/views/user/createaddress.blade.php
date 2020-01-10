@extends('front.app')
@section('content')
<div class="card" style="width: 800px">
	<div class="card-body" >
<form method="post" action="{{url('user/storeaddress')}}">
	@csrf
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Pincode</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword" placeholder="pincode" name="pincode">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword" placeholder="name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-5">
    	<textarea placeholder="Flat/House No/Colony/Street No" class="form-control" name="address"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Locality/Landmark</label>
    <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPassword" placeholder="Eg. Near School" name="landcart">

    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPassword" placeholder="City" name="city">

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">State</label>
    <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPassword" placeholder="State" name="state">

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Mobile No</label>
    <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPassword" placeholder="Mobile No" name="mobile">

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Alternet Number</label>
    <div class="col-sm-5">
          <input type="text" class="form-control" id="inputPassword" placeholder="Alternate" name="alternet">

    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Address Type</label>
    <div class="col-sm-5">
          <input type="radio" name="type" style="margin-top: 12px" value="Home/Personal">Home/Personal
          <input type="radio" name="type" style="margin-left: 20px" value="Office/Commercia">Office/Commercia
    </div>
  </div>
  <button class="btn btn-danger col-xs-7" type="submit"><span class="button-text">SAVE AND CONTINUE</span></button>
  <a href="{{url('user/showdetail')}}">Show Detail</a>
</form>
</div>
</div>
@endsection