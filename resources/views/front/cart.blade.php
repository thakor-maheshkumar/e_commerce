@extends('front.app')
@section('title','Cart Page')
@section('content')
    
    <?php if ($cartItems->isEmpty()) { ?>
    <br>
    <br>
    <br>
    <section id="cart_items">
        <div class="container">
            <div align="center">  <img src="{{asset('dist/img/empty-cart.png')}}"/></div>
        </div>
    </section> <!--/#cart_items-->
    <?php } else { ?>
    <br>
    <br>
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}"></a></li>
                    <li class="active">Shopping Cart</li>
                    <a href="{{url('/')}}">Home</a>
                </ol>
            </div>
            <div id="updateDiv">

                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Image</td>
                            <td class="description">Product</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        @if(session('error'))

                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                        </thead>
                        <?php $count =1;?>
                        @foreach($cartItems as $cartItem)
                        {{ $cartItem->attributes->items }}
                            <tbody>
                            <tr>
                                <td class="cart_product">
                                    <img src="{{URL::to('/')}}/images/{{$cartItem->image}}" class="img-responsive" width="250">
                                </td>
                                <td class="cart_description">
                                <!--<a href="{{url('/product_detail')}}/{{$cartItem->id}}">heang</a>
                                            <br>-->
                                    <!--</div>-->
                                    <h4><a href="{{url('/product_detail')}}/{{$cartItem->id}}" style="color:blue">{{$cartItem->name}}</a></h4>
                                    <p>Product ID: {{$cartItem->id}}</p>
                                    <p>Only  left</p>
                                </td>
                                <td class="cart_price">
                                    <!--<p>{{$cartItem->price}}</p> -->
                                    <input type="text" name="" value="{{$cartItem->price}}" class="price" id="price">
                                </td>
                                <td class="cart_quantity" id="cart_quantity">
                            <!--<input type="text" name="" value="{{$cartItem->quantity}}" id="ax{{$cartItem->id}}" class="ax" style="border: hidden; width: 17px;">
                                 <i class="fa fa-plus axy" style="border:1px solid #000;padding: 1px 1px;background-color: white" 
                                      onclick="addQuantity('ax{{$cartItem->id}}')"></i> 
                                    <button id="addme" class="addme" onclick="addQuantity('ax{{$cartItem->id}}')">add</button>-->
                                    <!--</div>-->
                                    <select class="form-control select" id="select{{$cartItem->id}}" data-cart-id="{{$cartItem->id}}" onchange="show_modal('{{$cartItem->id}}')">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="quantity" id="quantity">quantity</option>
                                    </select>
                                    <button id="hi">Hi</button>
                                </td>
                                <td class="cart_total">
                            <input type="text" name="" class="subtotal" id="subtotal{{$cartItem->id}}" value="{{$cartItem->price}}">
                                </td>
                                <td class="cart_delete">
                                    <button class="btn btn-primary">
                                        <a class="cart_quantity_delete" style="background-color:red" href='{{url("cart/remove/{$cartItem->id}")}}'><i class="fa fa-times">X</i></a>
                                    </button>
                                </td>
                            </tr>
                            <?php $count++;?>
                            </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <td><a href="{{url('user/createaddress')}}"><button  style="height: 40px;background-color:red;border: 1px solid;border-radius: 10px"><p style="color: white;margin-bottom: 0px;padding: 5px">Proccesss To Pay <input type="text" name="alltotal" class="alltotal" id="alltotal"style="width: 50px;border: hidden;background-color:red;color: white"></p></td></a></button>
                            </tr>
                             
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal" id="ab">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <table>
               <tr>
                   <th></th>
                </tr>
                <tr>
                   <td><input type="text"  id="quan" name="quan" class="form-control quan"></td>

                </tr>
          </table>
        </div>
        <input type="text" id="cartid" value="" hidden/>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-success enter">Enter</button>
          <button type="submit" name="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    </section>
    <!--/#cart_items-->
 <!--   <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <?php /*      <ul class="user_option">
                            <li>
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="text" id="couponCode">
                            </li>
                            <li>
                                <button id="couponBtn">Apply</button>
                            </li>
                        </ul>
                        */?>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>Subtotal</span></li>
                            <li>Eco Tax <span>TAX</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>Total</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{url('/')}}/checkout">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>/#do_action--> 
    <?php } ?>
@endsection