@extends('layout.baselayout')

   <!-- Menu -->
   @include('layout.partials.navindex')
   <!--fin Menu -->

@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/tm1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/images/tm2.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
       
</div>
     </div>
   </div>
@endsection
<b></b>