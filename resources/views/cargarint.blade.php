@extends('layout.baselayout')

@section('content')

		
<div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <img class="mb-4" src="/images/logosolo.png" alt="" width="200" height="200"> <br>
                    <h3 class="text-center">Cargar Interacciones</h3>
                </div>
                <div class="panel-body">
				<div class="card">
			
			<div class="card-body">
				
					
            {{$id}}
                    
            <form action="{{  route('interaccion.import',["id" => $id] )}}" method="POST" enctype="multipart/form-data">
            
            
            <br>
            
            <label>Seleccione el archivo de interacciones  </label>
            <br>
            @csrf
            @if (Session::has('message'))
            <p> {{Session::get('message') }}</p>
            @endif
            <input type="file" name="file">
            <button class="btn btn-dark mr-4">Importar interacciones</button>
            <a href="{{  route('list')}}"class="btn btn-dark mr-4">Listado de interacciones</a>
            </form>
            
                    </div>
            
            </div>

                            </div>
                    </div>
                </div>
            </div>


@endsection