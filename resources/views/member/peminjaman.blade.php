@extends('layouts.member.app')

@section('title', 'Member Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Peminjaman</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="//">
            @csrf
            <div class="col-12">
              <div class="form-group">
                <label for="title">Judul Buku</label>
                <input id="title" type="text" name="title" class="form-control">
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="author">Pengarang</label>
                <input id="author" type="text" name="author" class="form-control">
              </div>

              <div class="form-group">
                <label for="publication_date">Tanggal terbit</label>
                <input class="form-control datepicker" type="text" name="publication_date" id="publication_date">
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="publisher">Penerbit</label>
                <input id="publisher" type="text" name="publisher" class="form-control">
              </div>


              <div class="form-group">
                <label for="stock">Jumlah stok</label>
                <input id="stock" type="number" name="stock" class="form-control">
              </div>


              <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
