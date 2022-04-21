<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::paginate(10);
        return view('genre.index', compact('genres'));
    }

    public function create()
    {
        return view('genre.edit');
    }

    public function store(GenreRequest $request)
    {
        $data = $request->validated();
        Genre::create($data);
        return redirect()->route('genre.index');
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(GenreRequest $request, $id)
    {
        $genre = Genre::find($id);
        $data = $request->validated();
        $genre->update($data);
        return redirect()->route('genre.show', $genre->id);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
