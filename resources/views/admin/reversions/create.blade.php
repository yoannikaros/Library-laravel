@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Input Data Pengembalian</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="{{ route('reversions.store') }}">
            @csrf
            <div class="col-12 col-md-6 col-lg-6">

              <div class="form-group">
                <label for="reservation">Kode Peminjaman</label>
                <select id="reservation" name="reservation_id" class="form-control select2">
                  @foreach ($reservations as $reservation)
                    <option value="{{ $reservation->id }}">{{ $reservation->code }} - {{ $reservation->member->name }}</option>
                  @endforeach
                </select>
              </div>

            </div>

            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="return_date">Tanggal Pengembalian</label>
                <input class="form-control datepickerReversions" type="text" name="return_date" id="reversion_date">
              </div>

              <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
