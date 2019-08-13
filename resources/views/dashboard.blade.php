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

    <!-- slider -->
  <div class="container-fluid slider"></div>
    <!--  fin slider -->
   
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
          <h4 class="panel-title"> Bienvenido {{auth()->user()->name}} </h4>

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat.
       Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit 
       et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor.
        In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum 
        sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt 
        feugiat massa sed aliquam. Duis eu vehicula turpis.</p>

</div>
     </div>
   </div>
@endsection
<b></b>