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
          <form class="row" method="POST" action="{{ url('admin/staffs/'.$model->id) }}">
            @csrf
            <div class="col-12">
              <div class="form-group">
                <input type="hidden" name="_method" value="PATCH">
                <label for="title">Nama</label>
                <input id="title" type="text" name="name" value="{{ $model->name }}" class="form-control">

                <label for="author">username</label>
                <input id="author" type="text" name="username" value="{{ $model->username }}" class="form-control">

                  <label for="author">passwowrd</label>
                  <input id="author" type="password" name="password" value="{{ $model->password }}" class="form-control">

                    <label for="author">nomor telepon</label>
                    <input id="author" type="text" name="phone_number" value="{{ $model->phone_number }}" class="form-control">

                      <label for="author">alamat</label>
                      <input id="author" type="text" name="address" value="{{ $model->address }}" class="form-control">
                    </div>


              <button class="btn btn-primary float-right" type="submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
