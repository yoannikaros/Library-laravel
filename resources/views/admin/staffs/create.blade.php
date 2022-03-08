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
          <form class="row" method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="col-12">
              <div class="form-group">
                <label for="title">Nama</label>
                <input id="title" type="text" name="title" class="form-control">

                <label for="author">username</label>
                <input id="author" type="text" name="author" class="form-control">

                  <label for="author">passwowrd</label>
                  <input id="author" type="password" name="author" class="form-control">

                    <label for="author">nomor telepon</label>
                    <input id="author" type="text" name="author" class="form-control">

                      <label for="author">alamat</label>
                      <input id="author" type="text" name="author" class="form-control">
                    </div>


              <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
