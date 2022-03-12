@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Ubah Data Pengembalian</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="{{ route('reversions.update', $reversion->reservation_id) }}">
            @csrf
            @method('PUT')
            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="reversion">Kode Pengembalian</label>
                <input id="reversion" type="text" class="form-control" disabled value="{{ $reversion->code }}">
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="reservation">Kode Peminjaman</label>
                <input id="reservation" type="text" class="form-control" disabled
                  value="{{ $reversion->reservation->code }}">
              </div>

              <div class="form-group">
                <label for="return_date">Tanggal Pengembalian</label>
                <input class="form-control datepickerReversions" value="{{ $reversion->return_date }}" type="text"
                  name="return_date" id="return_date">
              </div>
              <button class="btn btn-primary float-right" type="submit">Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
