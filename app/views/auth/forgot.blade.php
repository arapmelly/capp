@extends('layouts/auth')
@section('content')
<div class="row justify-content-center">

    <div class="col-md-3 col-xs-12"></div>
        <div class="col-md-4 col-xs-12">
         



                <h1>Reset Password</h1>
                <hr>
                <p class="text-muted">Enter your email and a reset link will be sent your way</p>

                
                <form method="POST" action="{{ URL::to('/users/forgot_password') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">


    @if (Session::get('error'))
        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
    @endif

    @if (Session::get('notice'))
        <div class="alert alert-success">{{{ Session::get('notice') }}}</div>
    @endif
    
        

         <div class="form-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-envelope"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email Address" id="email" value="{{{ Input::old('email') }}}">
                </div>
        
    <div class="form-group">
                  <div class="">
                    <button type="submit" class="btn btn-primary px-4">Reset Password</button>
         
                    <a href="{{{ URL::to('/users/login') }}}" class="btn btn-link pull-right">Return to Login?</a>
                  
                </div>

    
</form>





            


           


          </div>


        </div>
    


@stop


