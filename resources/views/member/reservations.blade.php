@extends('layouts.app')

@section('title', 'Riwayat Peminjaman')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1 class="mr-auto">Riwayat Peminjaman</h1>
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
                      <th>Kode Peminjaman</th>
                      <th>Total buku</th>
                      <th>Staf</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Pengembalian</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($reservations as $key => $reservation)
                    <tr>
                      <td class="text-center">{{$key + 1}}</td>
                      <td>{{$reservation->code}}</td>
                      <td>{{$reservation->details->count()}}</td>
                      <td>{{$reservation->staff->name}}</td>
                      <td>{{$reservation->reservation_date}}</td>
                      <td>{{$reservation->reversion_date}}</td>
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
