<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        // $books = Book::all();
        $data = Book::all();
        return view('admin.books.index', compact (
            'data'
        ));
    }

    public function create()
    {
        $model = new Book;
        return view('admin.books.create',compact('model'));
    }

    public function store(Request $request)
    {
        $bookData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_date' => 'required',
            'publisher' => 'required',
            'stock' => 'required',
        ]);

        $book = Book::create($bookData);

        $book->code = 'B' . str_pad($book->id, 5, 0, STR_PAD_LEFT);
        $book->update();

        return redirect(route('books.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
