@extends('master.app')
@section('content')
Enter Date:<div id="datepicker-2" class="datepicker-2"></div>
<input type="text" name="datepicker-2" id="datepicker-2" class="datepicker-2">
<select class="form-control jsmultiple" name="city[]" multiple="multiple">
	 <option>Select City</option>
	 @foreach($city as $cities)
	 <option>{{$cities->city}}</option>
	 @endforeach
</select>
@endsection