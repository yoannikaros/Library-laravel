@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Input Buku</h1>

        <form>
            <label>Kode Buku</label>
            <input class="input" type="text" name="username" class="form_login" placeholder="Kode Buku ..">

            <label>Judul Buku</label>
            <input type="text" name="judulbuku" class="form_login" placeholder="Judul Buku">

            <label>Pengarang</label>
            <input type="text" name="pengarang" class="form_login" placeholder="Pengarang">

            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form_login" placeholder="Penerbit">

            <label>Jumlah stok</label>
            <input type="text" name="stok" class="form_login" placeholder="jumlah stok">

            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Tahun Terbit</option>
                <option value="1">2020</option>
                <option value="2">2021</option>
                <option value="2">2022</option>
            </select>
            <br>
            <input type="submit" class="tombol_login" value="INPUT">

            <br />
        </form>
    @endsection
