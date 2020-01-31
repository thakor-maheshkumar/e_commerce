@extends('master.app')
@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/book.css')}}">
@endpush
<a href="#collapseExample" class="btn btn-primary" data-toggle="collapse" id="collapse">Book a Pro<i class="fa fa-plus-circle"></i></a>
<div class="container collapse" id="collapseExample">
	<button class="btn btn-primary" value="search by place">Search By Place</button>
	<button class="btn btn-primary name" value="search by place">Search By Place</button>
	<div class="row">
		<div class="col-md-8">
		<div class="form-group">
			<input type="text" name="city" class="form-control" id="city" >
		</div>
	</div>
	<div class="col-md-4">
		<button class="btn btn-success">Find your Mountain Pro</button>
	</div>	
</div>
</div>
<div class="row">
	<div></div>
	<div id="countrylist"></div>
	</div>
@endsection
@push('jquery')
<!--<script type="text/javascript">
	$(document).on('keyup','#city',function(){
		var city=$('#city').val();
		if(city!= ""){
		$.ajax({
			type:"get",
			url:"{{url('getcity')}}",
			data:{city:city},
			dataType:'json',
			success:function(data){
				console.log(data);
				var result=data.data;
				var ul='';
				$.each(result,function(key,value){
					ul+='<tr>'+'<td>'+'<label id="mahe">'+value.city+'</label>'+'</td>'+'</tr>';
				});
				$("#countrylist").html(ul);
			}
		});
		}else{
			$('#countrylist').html("");
		}		
	});
</script> -->
<script type="text/javascript">
	$(function() {
    var mahi = [
      @php foreach($city as $data){
      	echo '"'.$data["city"].'",';

      } @endphp 
    ];
    $("#city").autocomplete({
      source:mahi
    });
  });
  </script>
</script>
@endpush