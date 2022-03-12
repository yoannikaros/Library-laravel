@extends('layouts.app')

@section('title', 'List Pengembalian')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1 class="mr-auto">List Pengembalian</h1>
      <a href="{{ route('reversions.create') }}" class="btn btn-primary">Tambah Data Pengembalian</a>
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
                      <th>Kode Pengembalian</th>
                      <th>Kode Peminjaman</th>
                      <th>Staf</th>
                      <th>Peminjam</th>
                      <th>Tgl Peminjaman</th>
                      <th>Tgl Pengembalian</th>
                      <th>Aksi</th>
                    </tr>
                    @foreach ($reversions as $key => $reversion)
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $reversion->code }}</td>
                      <td>{{ $reversion->reservation->code }}</td>
                      <td>{{ $reversion->staff->name }}</td>
                      <td>{{ $reversion->reservation->member->name }}</td>
                      <td>{{ $reversion->reservation->reservation_date }}</td>
                      <td>{{ $reversion->return_date }}</td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
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
