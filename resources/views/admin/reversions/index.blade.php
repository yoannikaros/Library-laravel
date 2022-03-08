@extends('layouts.app')

@section('title', 'List Pengembalian')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>List Pengembalian</h1>
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
                      <th>testung</th>
                      <th>du</th>
                      <th>lalala</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    @foreach ($reversions as $key => $value)

                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        {{ $key + 1 }}
                      </td>
                      <td>{{ $value->code }}</td>
                      <td>
                        {{ $value->created_at }}
                      </td>
                      <td>
                        {{ $value->updated_at }}
                      </td>
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
