<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\akukontroler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReversionController;
use App\Http\Controllers\StaffController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

    if (Auth::check()) {
        return redirect(route('dashboard'));
    }

    return redirect('/login');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('adminLogin');
    Route::post('/login', [AdminController::class, 'handleLogin'])->middleware('guest')->name('handleLogin');


    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [AdminController::class, 'logout'])->name('adminLogout');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('books', BookController::class);
        Route::resource('reservations', ReservationController::class)->except(['show']);
        Route::resource('reversions', ReversionController::class)->except(['show']);
        Route::resource('staffs', StaffController::class)->except('show');
        Route::resource('members', MemberController::class)->except('show');
    });
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

//route beranda,peminjaman,book untuk member
Route::get('/beranda', function () {
    return view('member.beranda', [
        'title => beranda'
    ]);
});

Route::get('/riwayat', function () {
    return view('member.history', [
        'title => history'
    ]);
});

Route::get('/peminjaman', function () {
    return view('member.peminjaman', [
        'title => peminjaman'
    ]);
});
