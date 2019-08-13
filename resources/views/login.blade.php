@extends('layout.baselayout')
   <!-- Menu -->
   @include('layout.partials.navlogin')
   <!--fin Menu -->

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <img class="mb-4" src="/images/logosolo.png" alt="" width="200" height="200"> <br>
                    <h3 class="text-center">Acceder a la Aplicacion</h3>
                </div>
                <div class="panel-body">
                    <form class="form-signin" method="POST" action="{{ route('login') }} ">
                        {{ csrf_field() }}
                        <div class="form-group {!! $errors->has('email')? 'has-error' : '' !!}">
                            <label for="email">Email</label>
                            <input class="form-control"
                                type="email" 
                                name="email"
                                value= "{{ old('email')}}"
                                placeholder="ingresa tu email">
                                {!!$errors->first('email', '<span class="help-block">:message</span>' ) !!}
                        </div>
                         <div class="form-group {!! $errors->has('password')? 'has-error' : '' !!}">
                            <label for="password">Contraseña</label>
                            <input class="form-control"
                                type="password" 
                                name="password"
                                placeholder="ingresa tu contraseña">
                                {!!$errors->first('password', '<span class="help-block">:message</span>' ) !!}
                        </div>
                        <button class="btn btn-primary btn-block">Acceder</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
@endsection