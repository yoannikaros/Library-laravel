@extends('layouts.main')
@section('register')
<div class="kotaklogin">
        <form>
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username..">

            <label>Email</label>
            <input type="text" name="username" class="form_login" placeholder="Email ..">

            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="Password ..">

            <input type="submit" class="tombol_login" value="Daftar">

            <br/>
            <br/>
            <center>
                <a class="link" href="/login">Login</a>
            </center>
        </form>
</div>

@endsection
