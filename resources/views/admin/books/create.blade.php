@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Input Buku</h1>
    </div>

    <div class="section-body">
      <form class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="form-group">
            <label>Kode Buku</label>
            <input type="text" name="code" class="form-control">
          </div>

          <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="title" class="form-control">
          </div>


          <div class="form-group">
            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form-control">
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6">

          <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control">
          </div>


          <div class="form-group">
            <label>Jumlah stok</label>
            <input type="text" name="stok" class="form-control">
          </div>


          <div class="form-group">
            <label for="published">Tahun terbit</label>
            <select id="published" class="form-control" aria-label="Default select example">
              <option value="1">2020</option>
              <option value="2">2021</option>
              <option value="2" selected>2022</option>
            </select>
          </div>
        </div>
      </form>
    </div>
  </section>

@endsection
