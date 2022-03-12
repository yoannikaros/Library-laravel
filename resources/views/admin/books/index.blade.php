@extends('layouts.app')

@section('title', 'List Buku')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1 class="mr-auto">List Buku</h1>
      <a href="{{ route('books.create') }}" class="btn btn-primary">Tambah Data Buku</a>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Kode</th>
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th>Tanggal Terbit</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $value)
                      <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $value->code }}</td>
                        <td> {{ $value->title }}</td>
                        <td> {{ $value->author }} </td>
                        <td> {{ $value->publisher }} </td>
                        <td> {{ $value->publication_date }}</td>
                        <td> {{ $value->stock }}</td>
                        <td class="d-flex">
                          <a href="{{ route('books.edit', $value->id) }}" class="btn btn-icon btn-warning">
                            <i class="fa fa-edit"></i>
                          </a>
                          <form class="d-inline ml-1" action="{{ route('books.destroy', $value->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-action btn-danger">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
