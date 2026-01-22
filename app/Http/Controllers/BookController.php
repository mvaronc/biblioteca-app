<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string|regex:/^[A-ZÑ][A-Za-z0-9\sñáéíóúü]+$/|max:250',
            'author' =>'required|string|regex:/^[A-ZÑ][A-Za-z0-9\sñáéíóúü,]+$/|max:255',
            'genre' => 'required|in:prose,poetry,theatre',
        ]);
        Book::create($validated);
        $LastInserted = Book::latest()->first();
        return redirect()->route('books.show', ['book' => $LastInserted->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string|regex:/^[A-ZÑ][A-Za-z0-9\sñáéíóúü]+$/|max:250',
            'author' =>'required|string|regex:/^[A-ZÑ][A-Za-z0-9\sñáéíóúü,]+$/|max:255',
            'genre' => 'required|in:prose,poetry,theatre',
        ]);
        $book->update($validated);
        return redirect()->route('books.show', ['book' => $book->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('books.index');
    }
}
