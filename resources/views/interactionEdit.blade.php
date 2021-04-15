@extends('layout')

@section('title', "Editar Usuario")

@section('content')


		<h1> Editar usuario </h1> 

		@if($errors->any())

		<div class="alert alert-danger">
				<h5>Por favor corrige los errores </h5>
		</div>
		
		@endif


		<form method="POST" action="{{ url('listado/{$user->id}') }}">
			{{ method_field('PUT') }}

			{!! csrf_field() !!} 




			<label for="name">Nombre: </label>
			<input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
			@if ($errors->has('name'))
				<p>{{ $errors->first('name') }}</p>
			@endif
			<br>

			<label for="password">Email: </label>
			<input type="email" name="email" id="email" value="{{ old('email',$user->email) }}">
			<br>

			<label for="password">Password: </label>
			<input type="password" name="password" id="password">
			<br>

			<button type="submit">Actualizar Usuario</button>

		</form>

			<a href="{{ route('users') }}">Regresar al listado de usuarios </a>
@endsection