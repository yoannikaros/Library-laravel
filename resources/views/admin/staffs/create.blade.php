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
                <label for="title">Nama</label>
                <input id="title" type="text" name="name" class="form-control">

                <label for="author">username</label>
                <input id="author" type="text" name="username" class="form-control">

                  <label for="author">passwowrd</label>
                  <input id="author" type="password" name="password" class="form-control">

                    <label for="author">nomor telepon</label>
                    <input id="author" type="text" name="phone_number" class="form-control">

                      <label for="author">alamat</label>
                      <input id="author" type="text" name="address" class="form-control">
                    </div>


              <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
