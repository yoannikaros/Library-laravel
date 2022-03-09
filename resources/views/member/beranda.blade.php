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
<div class="container">
  <div id="message"></div>
  <div class="row mt-2 pb-3">

    <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
      <div class="card-deck">
        <div class="card p-2 border-secondary mb-2">
          <img src="https://i.ibb.co/840yv0v/halokoding-1.jpg" class="card-img-top" height="250">
          <div class="card-body p-1">
            <h4 class="card-title text-center text-info"></h4>
            <h5 class="card-text text-center text-danger"><i ></h5>

          </div>
          <div class="card-footer p-1">
            <form action="" class="form-submit">
              <div class="row p-2">
                <div class="col-md-6 py-1 pl-4">
                  <b>Quantity : </b>
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control pqty" >
                </div>
              </div>
              <input type="hidden" class="pid">
              <input type="hidden" class="pname" >
              <input type="hidden" class="pprice" >
              <input type="hidden" class="pimage" >
              <input type="hidden" class="pcode">
              <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Pinjam</button>
            </form>
          </div>
        </div>
      </div>
    </div>

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
