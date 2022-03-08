@extends('layouts.app')

@section('title', 'List Buku')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>List Buku</h1>
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
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th>Waktu</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key=>$value)
                    <tr>
                      <td>
                        {{ $value->id }}
                      </td>
                      <td> {{ $value->title }}</td>
                      <td>
                        {{ $value->author }}
                      </td>
                      <td>
                        {{ $value->publisher }}
                      </td>
                      <td> {{ $value->published_datephp }}</td>
                      <td>
                        <div class="badge badge-success">Completed</div>
                      </td>
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
