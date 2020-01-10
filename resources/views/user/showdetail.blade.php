@extends('front.app')
@section('content')
<div class="card" style="width: 900px;margin-left: 70px">
	<div class="card-body">
        <div class="row">
           <div class="col-md-3">
              <i class="fa fa-check-circle" aria-hidden="true" style="color: green;font-size:20px"></i><label style="margin-left: 10px">1.Delivery Address</label>
          </div>
          <div class="col-md-6">
              @foreach($detail as $details)
              <div>
                {{$details->name}}, Mo:{{$details->mobile}}<br>
                {{$details->address}}, {{$details->landcart}}<br>
                {{$details->city}}-{{$details->pincode}},{{$details->state}}

            </div>
            @endforeach
        </div>
    </div>

</div>
</div>
<div class="card" style="width: 900px;margin-left: 70px;display: none;" id="hh">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <i class="fa fa-check-circle" aria-hidden="true" style="color: green;font-size:20px"></i><label style="margin-left: 10px">2.Review Order</label>
            </div>
            <div class="col-md-6">
                @foreach($cartItems as $cartItem)
                <div>
                    {{$cartItem->name}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="card" style="width: 900px;margin-left: 70px;">
    <div class="card-header bg-dark" style="color: white">Make Payement</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3"> 
                <div id="payment-nav-id" style="height: 500px;position: static;">
                    <div class="payment-mode" data-index="0">
                        <span>Credit Card</span>
                    </div>
                    <div class="payment-mode" data-index="1">
                        <span>Debit Card</span>
                    </div>
                    <div class="payment-mode" data-index="1">
                        <span>Net Banking</span>
                    </div>
                    <div class="payment-mode" data-index="1">
                        <span>Cash On Delivery</span>
                    </div>
                    <div class="payment-mode" data-index="1">
                        <span>EMI</span>
                    </div>
                    <div class="payment-mode" data-index="1">
                        <span>E-Gift Voucher</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p>Pay Using Credit Card</p>
                <hr>
                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Card Number</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Expiry Date</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option>MM/</option>
                                @for($b=1;$b<=12;$b++)
                                <option>{{$b}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option>YY/</option>
                                @for($a=20;$a<=40;$a++)
                                <option>{{$a}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="cardn" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button style="margin-left: 15px;background-color: red;border-radius: 10px"><p style="padding-top: 10px;margin-left: 50px;color: white">PAY RS<input type="text" name="alltotal" id="alltotal" class="alltotal" style="border:none;background-color: red;margin-left:10px;padding-top:10px;color: white"></p></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"> 
            </div>
            <div class="col-md-6">
                <p>Pay Using Debit Card</p>
                <hr>
                <form>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Card Number</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Expiry Date</label>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option>MM/</option>
                                @for($b=1;$b<=12;$b++)
                                <option>{{$b}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control">
                                <option>YY/</option>
                                @for($a=20;$a<=40;$a++)
                                <option>{{$a}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="cardn" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button style="margin-left: 15px;background-color: red;border-radius: 10px"><p style="padding-top: 10px;margin-left: 50px;color: white">PAY RS<input type="text" name="alltotal" id="alltotal" class="alltotal" style="border:none;background-color: red;margin-left:10px;padding-top:10px;color: white"></p></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="card" style="width: 900px;margin-left: 70px" id="mahesh">
	<h5 class="card-header bg-dark" style="color: white">3.Review Order</h5>
	<h5 class="card-header bg-default" style="color: white">
		<table>
           <tr>
              <th style="color: black">Detail</th>
              <th style="color: black;padding-left: 130px;font-size: 17px">Quanity</th>
              <th style="color: black;padding-left: 45px">Subtotal</th>
          </tr>
      </table>
  </h5>

  <div class="card-body" >
      <table class="mahesh">
        @foreach($cartItems as $cartItem)
        {{ $cartItem->attributes->items }}
        <tbody>
            <tr>
                <td class="cart_product">
                    <img src="{{URL::to('/')}}/images/{{$cartItem->image}}" class="img-responsive" width="100">
                </td>
                <td class="cart_description">
                                <!--<a href="{{url('/product_detail')}}/{{$cartItem->id}}">heang</a>
                                    <br>-->
                                    <!--</div>-->
                                    <h4><a href="{{url('/product_detail')}}/{{$cartItem->id}}" style="color:blue;margin-left: 15px" >{{$cartItem->name}}</a></h4>
                                    <!--<p>Product ID: {{$cartItem->id}}</p>
                                        <p>Only  left</p> -->
                                    </td>
                                    <td class="cart_quantity" id="cart_quantity">
                                        <input type="text" name="" value="{{$cartItem->quantity}}" id="ax{{$cartItem->id}}" class="ax" style="border: hidden; width: 17px;">
                                        <i class="fa fa-plus axy" style="border:1px solid #000;margin-left:0px;background-color: white" 
                                        onclick="addQuantity('ax{{$cartItem->id}}')"></i> 
                                        <!--  <button id="addme" class="addme" onclick="addQuantity('ax{{$cartItem->id}}')">add</button>-->
                                        <!--</div>-->
                                    </td>
                                    <td class="cart_price">
                                        <!--<p>{{$cartItem->price}}</p> -->
                                        <input  name="" value="{{$cartItem->price}}" class="price" id="price" type="hidden">
                                    </td>

                                    <td class="cart_total">
                                        <input type="text" name="" class="subtotal" id="subtotal" value="{{$cartItem->price}}" style="margin-left:50px;border:hidden;">
                                    </td>
                                    <td class="cart_delete">
                                        <button class="btn btn-primary">
                                            <a class="cart_quantity_delete" style="background-color:red" href='{{url("cart/remove/{$cartItem->id}")}}'><i class="fa fa-times">X</i></a>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>You pay</td>
                                    <td></td>

                                    <td><input type="text" name="" id="alltotal" class="alltotal" style="width:60px;margin-left:50px;border:hidden;"></td>
                                    <!--<td><button style="background-color: red;border-radius: 10px"><p style="color: white;padding-top: 15px">Process To pay<input type="text" name="alltotal" class="alltotal" id="alltotal" style="border: hidden;background-color:red;color: white;margin-left: "></p></button></td>-->
                                </tr>
                            </tfoot>
                        </table>
                        <div class="footer">
                            <button class="btn btn-danger" style="margin-left: 150px" id="bb">PROCEED TO PAYEMENTS</button>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                @endsection