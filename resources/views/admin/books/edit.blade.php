@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Input Buku</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="{{ route('books.update', $book->id) }}">
            @csrf
            @method('PUT')
            <div class="col-12">
              <div class="form-group">
                <label for="title">Judul Buku</label>
                <input id="title" type="text" value="{{ $book->title }}" name="title" class="form-control">
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="author">Pengarang</label>
                <input id="author" type="text" value="{{ $book->author }}" name="author" class="form-control">
              </div>

              <div class="form-group">
                <label for="publication_date">Tanggal terbit</label>
                <input class="form-control datepicker" value="{{ $book->publication_date }}" type="text"
                  name="publication_date" id="publication_date">
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="publisher">Penerbit</label>
                <input id="publisher" type="text" value="{{ $book->publisher }}" name="publisher" class="form-control">
              </div>


              <div class="form-group">
                <label for="stock">Jumlah stok</label>
                <input id="stock" type="number value="{{ $book->stock }}" name="stock" class="form-control">
              </div>


              <button class="btn btn-primary float-right" type="submit">Perbarui</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
