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
            <a class="nav-link" href="{{asset('assets')}}/#">Home
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
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-blue bg-blue">
    <div class="container">
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{asset('assets')}}/#">Cart<i class="fa fa-shopping-cart" style="font-size: 25px"></i>

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

</body>

</html>
