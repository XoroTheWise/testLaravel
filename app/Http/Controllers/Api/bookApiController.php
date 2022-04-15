<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookUpdateRequest;
use App\Http\Resources\bookResource;
use App\Models\Authors;
use App\Models\BookGenre;
use App\Models\books;
use App\Models\genres;
use Illuminate\Http\Request;

class bookApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return bookResource::collection(books::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created_genre = genres::create($request->all());
        return $created_genre;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new bookResource(books::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(bookUpdateRequest $request, $id)
    {
        $book = books::findOrFail($id);
        $author = authors::find(auth()->user()->id);
        if (auth()->user()->id != $book->authorId) {
            return ' This is not Your book. Your books ' . $author->books;
        }
        if (auth()->user()->id == $book->authorId) {
            $book->update($request->validated());
            return 'Update successful ' . $book;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = books::findOrFail($id);
        $author = authors::find(auth()->user()->id);
        if (auth()->user()->id != $book->authorId) {
            return ' This is not Your book. Your books ' . $author->books;
        }
        if (auth()->user()->id == $book->authorId) {
            BookGenre::where('bookId', $book->id)->delete();
            $book->delete();
            return 'Deleted successful ';
        }
    }
}
