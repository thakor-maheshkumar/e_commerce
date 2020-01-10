<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('asstes')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('asstes')}}/css/shop-homepage.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/payement.css')}}">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{asset('assets')}}/#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('assets')}}/#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('assets')}}/#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('assets')}}/#">Contact</a>
          </li>
          @auth
        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
@endauth

@guest
 <li><a class="lispan" href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
@endguest
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-blue bg-blue">
    <div class="container">
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
           
            <a class="nav-link" href="{{url('cart/product')}}">Cart<i class="fa fa-shopping-cart cartdata" style="font-size: 25px" id="cartdata"><span class="badge badge-pill badge-danger" id="cartdata">{{Cart::getContent()->count()}}</span>
</i>

              <span class="sr-only">(current)</span>
            </a>
          
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">

   @yield('content')
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('asstes')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('asstes')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#cli').click(function(){

      var cate =$('#cate').val();
      var price=$('#price').val();
      console.log(price);
      $.ajax({
        type:"get",
        url:"{{url('productcategory')}}",
        data:{
          'category_id':cate,
          'price':price,
        },
        dataType:'html',
        success:function(response){
          console.log(response);
          $('#productData').html(response);
        }
      })
    });
  });

  </script>
  <script type="text/javascript">

    function addQuantity(id){

        var counter=$('#'+id).val();
        counter++;
        $('#'+id).val(counter);
  
    }
  //var counter=$("#ax").val();
  // $(document).ready(function(){
  //   $('.addme').click(function(){
  //     counter++;
  //     $("#ax").val(counter);
  //   })
  // })
    </script>
    <script type="text/javascript">
      $(document).on('click','.axy',function(){
        var price=$(this).closest('tr').find('.price').val();
        var quantity=$(this).closest('tr').find('.ax').val();
        var total=price*quantity;
        $(this).closest('tr').find('.subtotal').val(total);
        count_total();
      });
      function count_total(){
        var sum=0;
        $(".subtotal").each(function(){
          sum+= +$(this).val();
        });
        $("#alltotal").val(sum);
      }
      function count_price(){
        var price=0;
        $(".price").each(function(){
          price+=+$(this).val();
        });
        $('#alltotal').val(price);
      }
      count_price();
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#bb').click(function(){
          $('#mahesh').fadeOut();
          $('#hh').fadeIn();
        });
      });
    </script>
    <script type="text/javascript">
      $(document).on('change','#select',function(){
        var quantity=$(this).val();
        var price=$(this).closest('tr').find('.price').val();
        var grandtotal=quantity*price;
        $(this).closest('tr').find('.subtotal').val(grandtotal);
        count_total();
      });
      function show_modal(productid){
        var modal=$('#myModal');
        if($("#select"+productid).val()==='quantity'){
          modal.modal('show');
          $("#cartid").val(productid);
          alert(productid);
        }else{
          var quantity=$("#select"+productid).val();
          var price=$("#select"+productid).closest('tr').find('.price').val();
          var grandtotal=quantity*price;
          $("#select"+productid).closest('tr').find('.subtotal').val(grandtotal);
        }
      }
      $(document).on('click','.enter',function(){
        var id = $("#cartid").val();

        var quan=$('#quan').val()
        $('#select'+id+' :selected').text(quan);
        //var price=$(this).closest('tr').find('.price').val();
        var price=$('#price').val();
        //$("#subtotal"+id).val(quan);

         $("#subtotal"+id).val(price*quan);


        console.log(price);
         //$(this).closest('tr').find('.subtotal').val(axy);
        
        $('#myModal').modal('hide');
      })
      $(document).on('click','.close',function(){
        $('#myModal').hide('modal');    
      });
    </script>
</body>

</html>
