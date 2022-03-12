<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\ReservationDetail;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function create()
    {
        $members = Member::all(['id', 'name']);
        $books = Book::all(['id', 'title', 'code']);
        return view('admin.reservations.create', compact('books', 'members'));
    }

    public function store(Request $request)
    {

        $reservationData = $request->validate([
            'member_id' => 'required|exists:members,id',
            'reversion_date' => 'required',
            'reservation_date' => 'required'
        ]);

        $request->validate([
            'books' => 'required|array|min:1'
        ]);


        $reservationData['staff_id'] = auth()->user()->id;


        $reservation = Reservation::create($reservationData);
        $reservation->code = 'R' . str_pad($reservation->id, 5, 0, STR_PAD_LEFT);
        $reservation->update();

        foreach ($request->books as $book) {
            ReservationDetail::create(
                [
                    'reservation_id' => $reservation['id'],
                    'book_id' => $book
                ]
            );
        }

        return redirect(route('reservations.index'));
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect(route('reservations.index'));
    }
}
