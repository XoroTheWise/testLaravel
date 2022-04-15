<?php

namespace App\Http\Controllers;


use App\Models\authors;
use App\Models\BookGenre;
use App\Models\books;
use App\Models\genres;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = books::paginate(10);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = authors::all();
        $genres = genres::all();
        return view('books.create', compact('authors', 'genres'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'authorId' => 'integer',
            'genreId' => '',
        ]);

        $genres = $data['genreId'];
        unset($data['genreId']);
        $bookID = books::create($data);
        $bookID->genres()->attach($genres);

        return redirect()->route('books.index');
    }

    public function show(books $book, BookGenre $bookGenre)
    {
        return view('books.show', compact('book', 'bookGenre'));
    }

    public function edit(books $book, BookGenre $bookGenre)
    {
        $authors = authors::all();
        $genres = genres::all();
        return view('books.edit', compact('book', 'authors', 'genres', 'bookGenre'));
    }

    public function update(books $book, BookGenre $bookGenre)
    {
        $data = request()->validate([
            'title' => 'string',
            'authorId' => 'integer',
            'genreId' => '',
        ]);
        $genres = $data['genreId'];
        unset($data['genreId']);

        $book->update($data);
        $book->genres()->sync($genres);
        return redirect()->route('books.show', $book->id);
    }

    public function destroy(books $book)
    {
        BookGenre::where('bookId', $book->id)->delete();
        $book->delete();
        return redirect()->route('books.index');
    }
}
