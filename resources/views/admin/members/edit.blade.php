@extends('layouts.app')

@section('title', 'Ubah Anggota')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Ubah Anggota</h1>
    </div>
    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="{{ route('members.update', $member->id) }}">
            @csrf
            @method('PUT')
            <div class="col-12">
              <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" value="{{ $member->name }}" type="text" name="name" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" value="{{ $member->email }}" type="text" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" class="form-control">
              </div>

              <div class="form-group">
                <label for="phone_number">Nomor Telepon</label>
                <input id="phone_number" value="{{ $member->phone_number }}" type="text" name="phone_number" class="form-control">
              </div>

              <div class="form-group">
                <label for="address">Alamat</label>
                <input id="address" value="{{ $member->address }}" type="text" name="address" class="form-control">
              </div>

              <button class="btn btn-primary float-right" type="submit">Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
