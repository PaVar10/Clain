@extends('layout.baselayout')


<style>
    .slider{
      background: url(/images/bg-3.png);
      background-size:cover;
      background-position: center; 
      height: 400px;
  
    }
    </style>
  
   <!-- Menu -->
   @include('layout.partials.nav')
   <!--fin Menu -->

    <!-- slider  -->
   <!-- <div class="container-fluid slider"></div> -->
    <!--  fin slider -->
   
@section('content')
<br><br><br>

   <div class="album text-muted">
     <div class="container">
       <div class="row">
          <h4 class="panel-title"> </h4>
      </div>
     </div>
   </div>
  

   <div class="album text-muted">
    <div class="container">
      <div class="row">
    
 


<div class="album text-muted">
  <div class="container">


    <br>
    <div class="row">
     <br>

        <table class="table table-striped table-dark">
            <thead>
              <tr>
        <!--         <th scope="col">#</th>  -->
                <th scope="col">Coversacion</th>
                <th scope="col">Descripcion</th>
                <th scope="col"></th>
                              
              </tr>
            </thead>
            <tbody>
              @foreach ($conv as $co)       
              <tr>
     
              <td><label for="text" name="name"> {{$co->name}}</label></td>
              <td><label for="text" name="description">{{$co->description}}</label></td>
            

            <td><a href="{{  route('listado.carga',["id" => $co->id])}}"class="btn btn-link" >Importar Interacciones </a><td> 


          

    

              </tr>
              @endforeach 
            </tbody>
          </table>

</div>
  </div>
</div>



@endsection
