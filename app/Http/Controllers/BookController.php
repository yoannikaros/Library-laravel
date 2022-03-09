<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $data = Book::all();
        return view('admin.books.index', compact(
            'data'
        ));
    }

    public function create()
    {
        return view('admin.books.create');
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

    public function show(Book $book)
    {
        //
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $bookData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_date' => 'required',
            'publisher' => 'required',
            'stock' => 'required',
        ]);

        $book->update($bookData);

        return redirect(route('books.index'));
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('books.index'));
    }
}
