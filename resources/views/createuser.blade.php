@extends('layout.baselayout')

@section('content')
	
		
	<div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <img class="mb-4" src="/images/logosolo.png" alt="" width="200" height="200"> <br>
                    <h3 class="text-center">Crear Usuario</h3>
                </div>
                <div class="panel-body">
				<div class="card">
			
			<div class="card-body">
				
					@if($errors->any())

					<div class="alert alert-danger">
						<h5>Por favor corrige los errores </h5>
			 			<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach

						</ul> 

					</div>
		
					@endif


					<form method="POST" action="{{ url('usuario/store') }}">

						{!! csrf_field() !!} 

						<div class="form-group">
						<label for="name">Nombre: </label>
						<input type="text" class="form-control" name="name" placeholder="Pablovaras" id="name" value="{{ old('name') }}">
  					    </div>
	

						<div class="form-group">
						 <label for="password">Email: </label>
						 <input type="email" class="form-control" name="email" placeholder="Pablo.varas@gmail" id="email" value="{{ old('email') }}">
						</div>
		
						<div class="form-group">
						 <label for="password">Password: </label>
					     <input type="password" class="form-control" name="password" placeholder="......."id="password">
						</div>

						<button type="submit" class="btn btn-primary">Crear Usuario</button>
						<a href="{{ route('users') }}"class="btn btn-link" >Regresar al listado de usuarios </a>
				</form>
	
			</div>
	
	</div>

                    </div>
            </div>
        </div>
    </div>

			
@endsection