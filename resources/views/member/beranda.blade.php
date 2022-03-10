@extends('layouts.member.app')

@section('title', 'Member Dashboard')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-body">

<!-- Displaying Products Start -->

<div class="card col-3 p-3 mb-2  bg-light">
  <div class="card-header ">
    <h4>Judul buku</h4>
  </div>
  <div class="card-body">
    <p class="mb-2">Penulis : Mark</p>
    <p class="mb-2">Penerbit : Mark</p>
       <p class="mb-2">Penerbit : Mark</p>
    <button class="btn btn-primary" id="modal-2">Pesan</button>
  </div>
</div>



<!-- Displaying Products End -->


        </div>
      </div>
    </div>

    <div class="section-body">
    </div>
  </section>
@endsection
