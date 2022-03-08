@extends('layouts.auth')
@section('content')
  <div class="card card-primary">
    <div class="card-header">
      <h4>Register</h4>
    </div>

    <div class="card-body">
      <form method="POST">
        <div class="row">
          <div class="form-group col-12">
            <label for="frist_name">Name</label>
            <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
          </div>

          <div class="form-group col-12">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="form-group col-12">
            <label for="password" class="d-block">Password</label>
            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
              name="password">
            <div id="pwindicator" class="pwindicator">
              <div class="bar"></div>
              <div class="label"></div>
            </div>
          </div>
          <div class="form-group col-12">
            <label for="password2" class="d-block">Password Confirmation</label>
            <input id="password2" type="password" class="form-control" name="password-confirm">
          </div>
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
            <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block">
            Register
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
