@extends('admin.layout');

@section('mycontent')
	<div class="col-4">
		<div class="row">
			<label for="">Name:</label>
			<label for="">{{$data->name}}</label>
		</div>
		<div class="row">
			<label for="">Mobile:</label>
			<label for="">{{$data->mobile}}</label>
		</div>
		<div class="row">
			<label for="">Email:</label>
			<label for="">{{$data->email}}</label>
		</div>
		<div class="row">
			<label for="">Gender:</label>
			<label for="">{{$data->gender}}</label>
		</div>
		<div class="row">
			<label for="">City:</label>
			<label for="">{{$data->city}}</label>
		</div>
		<div class="row">
			<a href="/uc/{{$data->id}}/edit" class="btn btn-primary">Edit</a>
		</div>
	</div>	

@endsection