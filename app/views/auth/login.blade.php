@extends('layouts/auth')
@section('content')
<div class="row justify-content-center">

    <div class="col-md-3 col-xs-12"></div>
        <div class="col-md-4 col-xs-12">
         



                <h1>Login</h1>
                <hr>
                <p class="text-muted">Sign In to your account</p>

                
                <form role="form" method="POST" action="{{{ secure_url('/users/login') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

    @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
        @endif

        @if (Session::get('notice'))
            <div class="alert alert-success">{{{ Session::get('notice') }}}</div>
        @endif

                <div class="form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="email" id="email" value="{{{ Input::old('email') }}}">
                </div>

                <div class="form-group ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" name="password" id="password" >
                </div>
                <div class="form-group">
                  <div class="">
                    <button type="submit" class="btn btn-primary">Login</button>
                  
                    <a href="{{{ URL::to('/users/forgot_password') }}}" class="btn btn-link px-0 pull-right">Forgot password?</a>
                  
<hr>
                  <p>New here?<a href="{{{ URL::to('/users/create') }}}" class="btn btn-link">Create an account</a></p>
                  

                  </div>
                </div>
</form>





            


           


          </div>


        </div>
    


@stop


