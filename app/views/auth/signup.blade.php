@extends('layouts/auth')
@section('content')
<div class="row justify-content-center">

    <div class="col-md-3 col-xs-12"></div>
        <div class="col-md-4 col-xs-12">
         



                <h1>Signup</h1>
                <hr>
                <p class="text-muted">Create a new Account</p>

                
    


    <form method="POST" action="{{{ secure_url('users') }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

    <input type="hidden" name="user_type" value="admin">

@if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if (Session::get('notice'))
            <div class="alert alert-success">{{ Session::get('notice') }}</div>
        @endif

    
                

                <div class="form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-envelope"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email Address" id="email" value="{{{ Input::old('email') }}}">
                </div>

                <div class="form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Password" id="password" >
                </div>

                <div class="form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" id="password_confirmation" >
                </div>

        

        

         <div class="form-group">
                  <div class="">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                  </div>

                  <hr>
                  <p>
                    Already a member?<a href="{{{ URL::to('/users/login') }}}" class="btn btn-link px-0">Login here</a>
                  </p>
                </div>

    </fieldset>
</form>





            


           


          </div>


        </div>
    


@stop


