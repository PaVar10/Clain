@extends('layout.baselayout')

<!-- Menu -->
@include('layout.partials.nav')
<!--fin Menu -->

@section('content')
<br>

<div class="album text-muted">
  <div class="container">
    <br> <br>
    <a href="{{  route('listado.export')}}"class="btn btn-dark mr-4">Exportar Interacciones</a>
    <!--   <a href="{{  route('list')}}"class="btn btn-dark mr-4">Listado de interacciones</a> -->
    <a href="{{  route('list')}}"class="btn btn-dark mr-4">Clasificar de interacciones</a>
    <a href="{{  route('list')}}"class="btn btn-dark mr-4">Generar Estadisticas</a>

    <br><br>
    <div class="row">
     <br>

        <table class="table table-striped table-dark">
            <thead>
              <tr>
        <!--         <th scope="col">#</th>  -->
                <th scope="col">Interaccion</th>
                <th scope="col">Conducta</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($list as $li)       
              <tr>
                <form method="POST" action="{{ url("listado/{$li->id}/actualizar") }}">
                  {{ method_field('PUT') }}
            
                  {!! csrf_field() !!}

             <!--          <th scope="row" name="id">{{ $li->id }}</th> -->
                    <td><label for="text" name="interaccion"> {{$li->interaction }}</label></td>
                    <td>                        
                          <select name="conducta">
                            <option value="{{$li->conduct }}"> {{$li->conduct }}</option> 
                            <option value="Muestra solidaridad">Muestra solidaridad</option> 
                            <option value="Muestra relajamiento">Muestra relajamiento</option>
                            <option value="Muestra acuerdo">Muestra acuerdo</option> 
                            <option value="Da sugerencia">Da sugerencia</option>
                            <option value="Da opinion">Da opinion</option>
                            <option value="Da informacion">Da informacion</option>
                            <option value="Pide informacion">Pide informacion</option>
                            <option value="Pide opinion">Pide opinion</option>
                            <option value="Pide sugerencia">Pide sugerencia</option>
                            <option value="Muestra acuerdo">Muestra acuerdo</option> 
                            <option value="Muestra tension">Muestra tension</option>    
                            <option value="Muestra agresividad">Muestra agresividad</option>
                          </select>
                    </td>
                    <td>
                      <button type="submit" class="btn btn-dark mr-4">Modificar</button>
                    </td>
            
            </form>
              </tr>
              @endforeach 
            </tbody>
          </table>

</div>
  </div>
</div>
@endsection
<b></b>