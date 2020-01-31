@extends('master.app')
@section('content')
<div class=container>
	<form method="post" action="{{url('user/store')}}">
	@csrf	
		<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control">
			</div>
		</div>
		<button type="submit" name="submit" class="btn btn-success">Submit</button>
	</div>
	</form>
	
</div>
@endsection