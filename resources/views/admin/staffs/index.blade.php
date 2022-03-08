@extends('layouts.app')

@section('title', 'List Staff')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>List Staff</h1>
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
                      <th>name</th>
                      <th>username</th>
                      <th>password</th>
                      <th>nomor tlp</th>
                      <th>alamat</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datanya as $key=>$value)
                    <tr>
                      <td>
                        {{ $value->id }}
                      </td>
                      <td> {{ $value->name }}</td>
                      <td>
                        {{ $value->username }}
                      </td>
                      <td>
                        {{ $value->password }}
                      </td>
                      <td>
                        {{ $value->phone_number }}
                      </td>
                      <td>
                        {{ $value->address }}
                      </td>
                      <td>


                        @endforeach
                        <div class="badge badge-success">Completed</div>
                      </td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
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
