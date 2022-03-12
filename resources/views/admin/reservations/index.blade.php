@extends('layouts.app')

@section('title', 'List Peminjaman')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1 class="mr-auto">List Peminjaman</h1>
      <a href="{{ route('reservations.create') }}" class="btn btn-primary">Tambah Data Peminjaman</a>
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
                      <th class="text-center">
                        #
                      </th>
                      <th>Kode</th>
                      <th>Peminjam</th>
                      <th>Staf</th>
                      <th>Tgl Pinjam</th>
                      <th>Tgl Pengembalian</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservations as $key => $reservation)
                      <tr>
                        <td>
                          {{ $key + 1 }}
                        </td>
                        <td>{{ $reservation->code }}</td>
                        <td>
                          {{ $reservation->member->name }}
                        </td>
                        <td>
                          {{ $reservation->staff->name }}
                        </td>
                        <td>
                          {{ $reservation->reservation_date }}
                        </td>
                        <td>
                          {{ $reservation->reversion_date }}
                        </td>
                        <td>
                          @if ($reservation->status == 'BORROWED')
                            <div class="badge badge-warning">Dipinjam</div>
                          @else
                            <div class="badge badge-success">Dikembalikan</div>
                          @endif
                        </td>
                        <td class="d-flex">
                          <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-icon btn-warning">
                            <i class="fa fa-edit"></i>
                          </a>
                          <form class="d-inline ml-1" action="{{ route('reservations.destroy', $reservation->id) }}"
                            method="POST">
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
