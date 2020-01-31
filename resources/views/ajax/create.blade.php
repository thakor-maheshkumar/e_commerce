@extends('master.app')
@section('content')
<div class="container">
	<form>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" id="name" class="form-control">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" id="address" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Gender</label>
				<input type="radio" name="gender" id="gender" value="male">Male
				<input type="radio" name="gender" id="gender" value="female">Female
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Hobby</label>
				<input type="checkbox" name="hobby[]" id="hobby" value="reading" class="hobby">Reading
				<input type="checkbox" name="hobby[]" id="hobby" value="writing" class="hobby">Writing
			</div>
		</div>
	</div>
	
	<button class="btn btn-success" id="add">Submit</button>
	</form>	
</div>
@endsection
@push('jquery')
<script type="text/javascript" src='{{asset("js/create.js")}}'></script>
@endpush
