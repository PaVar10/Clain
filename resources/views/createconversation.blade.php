@extends('layout.baselayout')

@section('content')

		
<div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <img class="mb-4" src="/images/logosolo.png" alt="" width="200" height="200"> <br>
                    <h3 class="text-center">Crear conversacion</h3>
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

                    
					<form method="POST" action="{{ url('conversacion/store') }}">

						{!! csrf_field() !!} 

						<div class="form-group">
						<label for="name">Nombre de la conversacion: </label>
						<input type="text" class="form-control" name="name" placeholder="..." id="name" value="{{ old('name') }}">
  						</div>
	

						<div class="form-group">
						 <label for="password">Descripcion: </label>
						 <input type="text" class="form-control" name="descripcion" placeholder="..." id="descripcion" value="{{ old('descripcion') }}">
						</div>


						<button type="submit" class="btn btn-primary">Guardar Conversacion</button>
						<a href="{{ route('users') }}"class="btn btn-link" >Regresar al menu usuarios </a> <br>
                        <a href="{{  route('conversation.showlist')}}"class="btn btn-dark mr-4">Listado de conversaciones</a>
				</form>
	
			</div>
	
	</div>

                    </div>
            </div>
        </div>
    </div>


@endsection