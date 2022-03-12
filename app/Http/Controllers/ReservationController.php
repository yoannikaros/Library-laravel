<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\ReservationDetail;
use App\Models\Reversion;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

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
            'books' => 'required|array|min:1|max:3'
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

    public function edit(Reservation $reservation)
    {
        $members = Member::all(['id', 'name']);
        $books = Book::all(['id', 'title', 'code']);

        $selectedBook = $reservation->details->toArray();
        $selectedBook = array_map(fn ($val) => $val['book_id'], $selectedBook);

        return view('admin.reservations.edit', compact('members', 'books', 'reservation', 'selectedBook'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservationData = $request->validate([
            'member_id' => 'required|exists:members,id',
            'reversion_date' => 'required',
            'reservation_date' => 'required'
        ]);

        $validated = $request->validate([
            'books' => 'required|array|min:1|max:3'
        ]);

        $books = [];

        foreach ($validated['books'] as  $book) {
            array_push($books, [
                'book_id' => (int) $book,
                'reservation_id' => $reservation->id
            ]);
        }

        $reservation->update($reservationData);

        ReservationDetail::where([
            'reservation_id' => $reservation->id
        ])->delete();

        foreach ($books as $book) {
            ReservationDetail::create($book);
        }

        return redirect(route('reservations.index'));
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect(route('reservations.index'));
    }
}
