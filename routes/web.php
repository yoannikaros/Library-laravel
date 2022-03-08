<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\akukontroler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReversionController;
use App\Http\Controllers\StaffController;
use App\Models\Reservation;
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
    return redirect(route('dashboard'));
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('adminLogin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('books', BookController::class);
    Route::resource('books', BookController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('reversions', ReversionController::class);
    Route::resource('staffs', StaffController::class);
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

