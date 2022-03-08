@extends('layouts.main')
@section('login')

<style type="text/css">
  .kotak{
width: 1000px;
background: white;
/*meletakkan form ke tengah*/
margin: 80px auto;
padding: 30px 20px;
}

</style>
    <div class="kotak">
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
PEMINJAMAN  </h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"
        ><a href="#!" class="text-success"
          ><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a
      ></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">id buku</th>
            <th class="text-center">Judul buku</th>
            <th class="text-center">Pengarang</th>
            <th class="text-center">Id Penerbit</th>
            <th class="text-center">Penerbit</th>
            <th class="text-center">Tahun terbit</th>
            <th class="text-center">Edit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3-half" contenteditable="true">2</td>
            <td class="pt-3-half" contenteditable="true">Yoan Nikaros Suwardi</td>
            <td class="pt-3-half" contenteditable="true">Deepends</td>
            <td class="pt-3-half" contenteditable="true">2</td>
            <td class="pt-3-half" contenteditable="true">Yoan</td>
            <td class="pt-3-half" contenteditable="true">2021</td>
            </td>
            <td>
              <span class="table-remove"
                ><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                  Remove
                </button></span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->
    @endsection
