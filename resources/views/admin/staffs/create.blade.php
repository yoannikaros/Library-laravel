@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Input Staf</h1>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="{{ route('staffs.store') }}">
            @csrf
            <div class="col-12">
              <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" name="name" class="form-control">
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" name="username" class="form-control">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control">
              </div>

              <div class="form-group">
                <label for="phone_number">Nomor Telepon</label>
                <input id="phone_number" type="text" name="phone_number" class="form-control">
              </div>

              <div class="form-group">
                <label for="address">Alamat</label>
                <input id="address" type="text" name="address" class="form-control">
              </div>


              <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
