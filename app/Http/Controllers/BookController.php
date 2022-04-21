<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('book.index', compact('books'));
    }

    public function create()
    {
        $author = Author::all();
        $genre = Genre::all();
        return view('book.edit', compact('author', 'genre'));
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();
        $genre = $data['genres'];
        unset($data['genres']);
        $bookID = Book::create($data);
        $bookID->genres()->attach($genre);
        return redirect()->route('book.index');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $author = Author::all();
        $genre = Genre::all();
        return view('book.edit', compact('book', 'author', 'genre'));
    }

    public function update(BookRequest $request, $id)
    {

        $book = Book::find($id);
        $data = $request->validated();

        $genres = $data['genres'];

        unset($data['genres']);

        $book->update($data);
        $book->genres()->sync($genres);
        return redirect()->route('book.show', $book->id);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index');
    }
}
