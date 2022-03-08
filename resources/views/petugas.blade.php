@extends('layouts.main')
@section('login')

    <div class="kotaklogin">
        <p class="tulisan_login">Petugas</p>

        <form>
            <label>Id petugas</label>
            <input type="text" name="username" class="form_login" placeholder="Id petugas">
            <label>Nama Petugas</label>
            <input type="text" name="username" class="form_login" placeholder="Nama Petugas..">

<br>

            <select class="form-select" aria-label="Default select example">
                <option selected>Tipe Petugas</option>
                <option value="1">Staf</option>
                <option value="2">Admin</option>
              </select>
 <br>

            <label>Bagian</label>
            <input type="text" name="username" class="form_login" placeholder="Bagian..">

            <input type="submit" class="tombol_login" value="INPUT">

            <br/>
        </form>

@endsection
