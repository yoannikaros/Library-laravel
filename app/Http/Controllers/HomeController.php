<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('member.home');
    }

    public function reservations()
    {
        $reservations = auth()->user()->reservations;
        return view('member.reservations', compact('reservations'));
    }

    public function reversions()
    {
        $reservations = auth()->user()->reservations;

        return view('member.reversions', compact('reservations'));
    }
}
