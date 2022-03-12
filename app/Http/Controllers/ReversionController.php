<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Reversion;
use Illuminate\Http\Request;

class ReversionController extends Controller
{
    public function index()
    {
        $reversions = Reversion::all();
        return view('admin.reversions.index', compact('reversions'));
    }

    public function create()
    {
        $reservations = Reservation::where('status', 'BORROWED')->get();
        return view('admin.reversions.create', compact('reservations'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'return_date' => 'required'
        ]);

        $data['staff_id'] = auth()->user()->id;


        $reversion = Reversion::create($data);
        $reservation = Reservation::find($data['reservation_id']);

        $reservation->update(['status' => 'RETURNED']);

        foreach ($reservation->details as $detail) {
            $detail->book->increment('stock');
        }

        $reversion->code = 'RE' . str_pad($reversion->reservation_id, 5, 0, STR_PAD_LEFT);
        $reversion->update();

        return redirect(route('reversions.index'));
    }

    public function edit(Reversion $reversion)
    {
        return view(('admin.reversions.edit'), compact('reversion'));
    }

    public function update(Request $request, Reversion $reversion)
    {
        $data = $request->validate([
            'return_date' => 'required'
        ]);

        $reversion->update($data);

        return redirect(route('reversions.index'));
    }
}
