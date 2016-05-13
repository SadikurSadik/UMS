@extends('layout.master');

@section('title')
  Login | University Management System
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <div class="panel panel-default user_form">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
          @if(Session::has('message'))
            <span class="help-block">{{ Session::get('message') }}</span>
					@endif
          <form method="POST" action="{{ Route('postlogin') }}" accept-charset="UTF-8" id="login">
            <input name="_token" type="hidden" value="{{ Session::token() }}">

            <div class="form-group form-email ">
              <label for="email" class="btn-label">Email</label>
              <input class="form-control" name="email" type="email" id="email" value="{{ Request::old('email') }}">
              <span class="help-block"></span>
                @if($errors->has('email')) <label class="error-label">{{ $errors->first('email') }}</label> @endif
            </div>

            <div class="form-group form-password ">
              <label for="password" class="btn-label">Password</label>
              <input class="form-control" name="password" type="password" value="" id="password">
              <span class="help-block">

              </span>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label>
                    <input type="checkbox" name="remember"> Remember me
                  </label>
                </div>
                <div class="col-md-6 loginms">
                  <a href="">Forget password?</a>
                </div>
              </div>
            </div>

            <input class="btn btn-primary" type="submit" value="Login">
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
