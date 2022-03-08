<?php

use App\Http\Controllers\akukontroler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('adminLogin');
    Route::resource('books', BookController::class);


});



Route::get('/pinjaman', function () {
    return view('/pinjaman',[
        "judul" => "pinjaman"
    ]);
});


Route::get('/petugas', function () {
    return view('petugas',[
        "judul" => "petugas"
    ]);
});

Route::get('/inputbuku', function () {
    return view('inputbuku',[
        "judul" => "inputbuku"
    ]);
});


Route::get('/register', function () {
    return view('register',[
        "judul" => "register"
    ]);
});

Route::get('/pengembalian', function () {
    return view('pengembalian',[
        "judul" => "pengembalian"
    ]);
});
