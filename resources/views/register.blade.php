@extends('layout')
@section('title','Registos')
@section('menu_register', 'active')
@push('link')
	<!-- Do not forget to put the correct path as 
	/css/style.css.
	if you put css/style.css it will not be able to find the file as
	we are using controller :) -->
	<link rel="stylesheet" href="/css/style.css" >
@endpush

@section('mycontent')
	<h1>Registos</h1>
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
			<form action="/uc" method="post">
				<!-- Thus, now we need to add csrf field here for post method -->
				<!-- You may see that there is no token values or hidden input here.  -->
				{{csrf_field()}}
				<!-- csrf_field is convereted to hidden input with proper token for security reason :)-->
				<div class="form-group">
					<input type="text" name="name" placeholder="Nome" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="email" placeholder="Email" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="mobile" placeholder="Telemóvel" class="form-control" maxlength="9">
				</div>
				<div class="form-check">
					<label for="">Género: </label>
					<input type="radio" name="gender" value="male">
					<label for="">Masculino</label>
					<input type="radio" name="gender" value="female">
					<label for="">Femenino</label>
				</div>
				<div class="form-group">
					<label for="">Cidade:</label>
					<select name="city" id="" class="form-control">
						<option value="0" selected disabled>Escolha a cidade</option>
						<option value="Lisboa">Lisboa</option>
						<option value="Porto">Porto</option>
						<option value="Coimbra">Coimbra</option>
						<option value="Braga">Braga</option>
						<option value="Guimarães">Guimarães</option>
						<option value="Évora">Évora</option>
						<option value="Aveiro">Aveiro</option>
						<option value="Faro">Faro</option>
						<option value="Beja">Beja</option>
						<option value="Sintra">Sintra</option>
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