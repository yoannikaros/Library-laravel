@extends('layouts.app')

@section('title', 'List Anggota')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1 class="mr-auto">List Anggota</h1>
      <a href="{{ route('members.create') }}" class="btn btn-primary">Tambah Anggota</a>
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
                      <th>Email</th>
                      <th>Nomor Telpon</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($members as $key => $member)
                      <tr>
                        <td>
                          {{ $member->id }}
                        </td>
                        <td> {{ $member->name }}</td>
                        <td>
                          {{ $member->email }}
                        </td>
                        <td>
                          {{ $member->phone_number }}
                        </td>
                        <td>
                          {{ $member->address }}
                        </td>
                        <td class="d-flex">
                          <a href="{{ route('members.edit', $member->id) }}" class="btn btn-icon btn-warning">
                            <i class="fa fa-edit"></i>
                          </a>
                          <form class="d-inline ml-1" action="{{ route('members.destroy', $member->id) }}"
                            method="POST">
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
