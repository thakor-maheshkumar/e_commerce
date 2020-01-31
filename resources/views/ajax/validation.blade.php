@extends('master.app')
@section('content')
<div class="container">
	<h2>jquery Laravel Form Validatiob example</h2>
	<form method="post" action="{{url('validations')}}" id="form">
	@csrf 
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<label>Number</label>
				<input type="text" name="number" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<label>URL</label>
				<input type="text" name="url" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection
@push('jquery')
<script type="text/javascript">
	$('#form').validate({
		rules:{
			name:{
				required:true
			},
			email:{
				required:true
			},
			number:{
				required:true,
				digits:true
			},
			url:{
				required:true
			}
		}
	});
</script>
@endpush