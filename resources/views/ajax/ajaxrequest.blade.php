@extends('master.app')
@section('content')
<h1>Laravel Ajax Request Example</h1>
<form>
	@csrf
<div class="form-group">
	<label>Name:</label>
	<input type="text" name="name" id="name" class="form-control" placeholder="name">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" id="email" class="form-control" placeholder="email">
</div>
<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" id="password" class="form-control" placeholder="password">
</div>

<div class="form-group">
	<button class="btn btn-success btn-submit">Submit</button>
</div>
</form>
@endsection
@push('jquery')
<script type="text/javascript">
	$.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
	$(document).on('click','.btn-submit',function(e){
		e.preventDefault();
		//var name=$('#name').val();
		//var email=$('#email').val();
		//var password=$('#password').val();
		var name=$("input[name=name]").val();
		var email=$("input[name=email]").val();
		var password=$("input[name=password]").val();
		$.ajax({
			type:'post',
			url:'{{url("ajaxrequestdata")}}',
			data:{name:name,email:email,password:password},
			success:function(data){
				alert(data.success);
			}
		})
	});
</script>
@endpush