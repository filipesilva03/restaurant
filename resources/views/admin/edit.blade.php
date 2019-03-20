@extends('layout')
@section('title','Edit Form')
@push('link')
	<!-- Do not forget to put the correct path as 
	/css/style.css.
	if you put css/style.css it will not be able to find the file as
	we are using controller :) -->
	<link rel="stylesheet" href="/css/style.css" >
@endpush

@section('mycontent')
	<h1>Edit Form</h1>
<!-- 	Let's now start making the registration form by our own
	using bootstrap and emmet coding. :) -->
	<!-- Now lets add some css to it :) -->
<!-- 	Okay now let's integrate it to our layout file :)-->	
	<div class="row">
		<div class="col"></div>
		<div class="col">
			<!-- I am using the convention of resources to pass the value here
			but for testing purpose i have mentioned the get method then
			i will change to post method. -->
			<!-- Now let's change it to the post method -->
<!-- 			Now let's pass the $data from the controller
 -->			<form action="/uc/{{$data->id}}" method="post">
				<!-- Thus, now we need to add csrf field here for post method -->
				<!-- You may see that there is no token values or hidden input here.  -->
				{{csrf_field()}}
				{{method_field('patch')}}
				<!-- csrf_field is convereted to hidden input with proper token for security reason :)-->
				<div class="form-group">
					<input type="text" name="name" placeholder="name" class="form-control" value="{{$data->name}}">
				</div>
				<div class="form-group">
					<input type="text" name="email" placeholder="email" class="form-control" value="{{$data->email}}">
				</div>
				<div class="form-group">
					<input type="text" name="mobile" placeholder="mobile" class="form-control" value="{{$data->mobile}}">
				</div>
<!-- 				We would look on the further values after some time
	Now its the time for radio button to have the value from db. :) but lets have some trial before that. 
 -->				<div class="form-check">
					<label for="">Owner Gender: </label>
					<input type="radio" name="gender" value="male" @if($data->gender=="male") checked @endif>
					<label for="">Male</label>
					<input type="radio" name="gender" value="female" @if($data->gender=="female") checked @endif>
					<label for="">Female</label>
				</div>

<!-- 				Let's try statically to change the data at first. 
					Okay then now it's working fine. lets code using laravel.
 -->				<div class="form-group">
					<label for="">City:</label>
					<select name="city" id="" class="form-control">
						<option value="Rajkot" @if($data->city=="Rajkot") selected @endif>Rajkot</option>
						<option value="Ahmedabad" @if($data->city=="Ahmedabad") selected @endif>Ahmedabad</option>
						<option value="Vadodara" @if($data->city=="Vadodara") selected @endif>Vadodara</option>
						<option value="Surat" @if($data->city=="Surat") selected @endif>Surat</option>
					</select>
				</div>
				<!-- here I have mentioned mt-2 for proper spacing between two elements :) -->
				<div class="mt-2 form-group">
					<input type="submit" value="submit" class="btn btn-primary">
					<input type="reset" value="reset" class="btn btn-secondary">
				</div>
				<!-- This must be submitted to store method in controller as per resource rule 
				so let's create it there :) -->
			</form>
		</div>
		<div class="col"></div>
	</div>
@endsection