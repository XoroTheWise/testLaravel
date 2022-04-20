<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookUpdateRequest;
use App\Http\Resources\bookResource;
use App\Models\author;
use App\Models\book;
use App\Models\genre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return bookResource::collection(book::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $created_genre = genre::create($request->all());
        return $created_genre;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        if (!book::find($id)) {
            $data = [
                'error' => 'There is no book with this id',
            ];
            return $data;
        }
        return new bookResource(book::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(bookUpdateRequest $request, $id)
    {
        if (!book::find($id)) {
            $data = [
                'error' => 'There is no book with this id',
            ];
            return $data;
        }

        $book = book::findOrFail($id);
        $author = author::find(auth()->user()->id);

        if ($author->id != $book->author_id) {
            $data = [
                'message' => 'This is not Your book. Your book',
                'books' => bookResource::collection($author->books),
            ];
            return $data;
        } else {
            $book->update($request->validated());
            $data = [
                'message' => 'Update successful',
                'book' => $book,
            ];
            return $data;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        if (!book::find($id)) {
            $data = [
                'error' => 'There is no book with this id',
            ];
            return $data;
        }

        $book = book::findOrFail($id);
        $author = author::find(auth()->user()->id);

        if ($author->id != $book->author_id) {
            $data = [
                'message' => 'This is not Your book. Your book',
                'books' => $author->books,
            ];
            return $data;
        } else {
            $bookTemp = $book;
            $book->delete();
            $data = [
                'message' => 'Deleted',
                'book' => $bookTemp,
            ];
            return $data;
        }
    }
}
