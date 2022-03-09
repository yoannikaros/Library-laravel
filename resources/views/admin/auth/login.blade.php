@extends('layouts.auth')

@section('title', 'Login')

@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h4>Login</h4>
    </div>

    <div class="card-body">
      <form method="POST" action="{{route('handleLogin')}}" class="needs-validation" novalidate="">
        @csrf
        <div class="form-group">
          <label for="username">Username</label>
          <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
          <div class="invalid-feedback">
            Please fill in your username
          </div>
        </div>

        <div class="form-group">
          <div class="d-block">
            <label for="password" class="control-label">Password</label>
          </div>
          <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
          <div class="invalid-feedback">
            Please fill in your password
          </div>
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
            <label class="custom-control-label" for="remember-me">Remember Me</label>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
