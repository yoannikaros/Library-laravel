@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('content')

  <section class="section">
    <div class="section-header">
      <h1>Input Data Peminjaman</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form class="row" method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <div class="col-12 col-md-6 col-lg-6">

              <div class="form-group">
                <label for="member">Member</label>
                <select id="member" name="member_id" class="form-control select2">
                  @foreach ($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="reservation_date">Tanggal Pinjam</label>
                <input class="form-control datepicker" type="text" name="reservation_date" id="reservation_date">
              </div>

            </div>

            <div class="col-12 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="books">Buku </label>
                <select id="books" name="books[]" class="form-control select2" multiple>
                  @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->code }} - {{$book->title}}</option>
                  @endforeach
                </select>
              </div>


              <div class="form-group">
                <label for="reversion_date">Tanggal Pengembalian</label>
                <input class="form-control datepicker" type="text" name="reversion_date" id="reversion_date">
              </div>


              <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection
