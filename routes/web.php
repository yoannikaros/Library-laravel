<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReversionController;
use App\Http\Controllers\StaffController;
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
    } else if (Auth::guard('member')->check())
        return redirect(route('memberDashboard'));
    else
        return redirect('/login');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->middleware(['guest', 'guest:member'])->name('adminLogin');
    Route::post('/login', [AdminController::class, 'handleLogin'])->middleware(['guest', 'guest:member'])->name('handleLogin');


    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [AdminController::class, 'logout'])->name('adminLogout');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('books', BookController::class)->except(['show']);
        Route::resource('reservations', ReservationController::class)->except(['show']);
        Route::resource('reversions', ReversionController::class)->except(['show']);
        Route::resource('staffs', StaffController::class)->except('show');
        Route::resource('members', MemberController::class)->except('show');
    });
});

Route::middleware(['guest', 'guest:member'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
});

Route::middleware(['auth:member'])->group(function () {
    //route beranda,peminjaman,book untuk member
    Route::get('/dashboard', function () {
        return view('member.beranda', [
            'title => beranda'
        ]);
    })->name('memberDashboard');

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

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
//selesai
