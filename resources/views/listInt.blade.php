@extends('layout.baselayout')

<!-- Menu -->
@include('layout.partials.nav')
<!--fin Menu -->

@section('content')
<br>
<div class="album text-muted">
  <div class="container">
    <div class="row">
     <br>
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Interaccion</th>
                <th scope="col">Conducta</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($list as $li)       
              <tr>
                <th scope="row">{{ $li->id }}</th>
              <td>{{$li->interaccion }}</td>
              <td>                        
                    <select name="OS">
                       <option value="1"></option> 
                       <option value="2">muestra enojo</option> 
                       <option value="3">muestra relajacion</option>
                       <option value="10">muestra solidaridad</option> 
                       <option value="11">muestra apoyo</option> 
                    </select>
                   </td>
              </tr>
              @endforeach 
            </tbody>
          </table>

</div>
  </div>
</div>
@endsection
<b></b>