<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\book;
use App\Models\Genre;

class BookController extends Controller
{
    public function index()
    {
        $books = book::paginate(10);
        return view('book.index', compact('books'));
    }

    public function create()
    {
        $author = author::all();
        $genre = genre::all();
        return view('book.create', compact('author', 'genre'));
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();

        $genre = $data['genre_id'];
        unset($data['genre_id']);

        $bookID = book::create($data);
        $bookID->genres()->attach($genre);
        return redirect()->route('book.index');
    }

    public function show($id)
    {
        $book = book::find($id);
        return view('book.show', compact('book'));
    }

    public function edit($id)
    {
        $book = book::find($id);
        $authors = author::all();
        $genres = genre::all();
        return view('book.edit', compact('book', 'authors', 'genres'));
    }

    public function update(BookRequest $request, $id)
    {
        $book = book::find($id);
        $data = $request->validated();

        $genres = $data['genre_id'];
        unset($data['genre_id']);

        $book->update($data);
        $book->genres()->sync($genres);
        return redirect()->route('book.show', $book->id);
    }

    public function destroy($id)
    {
        $book = book::find($id);
        $book->delete();
        return redirect()->route('book.index');
    }
}
