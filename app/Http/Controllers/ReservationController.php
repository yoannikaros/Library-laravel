<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index()
    {
        $reservasi = Reservation::all();
        return view('admin.reservations.index',compact('reservasi'));
    }
}
