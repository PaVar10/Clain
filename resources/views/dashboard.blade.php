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
          <h4 class="panel-title"> Bienvenido {{auth()->user()->name}} </h4>
      </div>
     </div>
   </div>


   <div class="album text-muted">
    <div class="container">
      <div class="row">

 <a href="{{  route('conversation.create')}}"class="btn btn-dark mr-4">cargar conversacion</a>
     

       
      </div>
    </div>
  </div>
@endsection
<b></b>