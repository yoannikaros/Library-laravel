@extends('layouts.main')
@section('content')
    <div class="kotaklogin">
        <p class="tulisan_login">Silahkan login</p>

        <form>
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">

            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="Password ..">
            <select class="form-select" aria-label="Default select example">
                <option selected>Tipe login</option>
                <option value="1">Staf</option>
                <option value="2">Admin</option>
                <option value="3">Mahasiswa</option>
            </select>
            <br />
            <input type="submit" class="tombol_login" value="LOGIN">

            <br />
            <br />
            <center>
                <a class="link" href="/register">Daftar</a>
            </center>
        </form>
    @endsection
