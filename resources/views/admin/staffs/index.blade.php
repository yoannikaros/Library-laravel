@extends('layouts.app')

@section('title', 'List Staff')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1 class="mr-auto">List Staff</h1>
      <a href="{{ route('staffs.create') }}" class="btn btn-primary">Tambah Staff</a>
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
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Nomor Telpon</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datanya as $key => $value)
                      <tr>
                        <td>
                          {{ $value->id }}
                        </td>
                        <td> {{ $value->name }}</td>
                        <td>
                          {{ $value->username }}
                        </td>
                        <td>
                          {{ $value->phone_number }}
                        </td>
                        <td>
                          {{ $value->address }}
                        </td>
                        <td class="d-flex">
                          <a href="{{ route('staffs.edit', $value->id) }}" class="btn btn-icon btn-warning">
                            <i class="fa fa-edit"></i>
                          </a>
                          <form class="d-inline ml-1" action="{{ route('staffs.destroy', $value->id) }}" method="POST">
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
