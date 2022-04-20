<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = genre::paginate(10);
        return view('genre.index', compact('genres'));
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(GenreRequest $request)
    {
        $data = $request->validated();
        genre::create($data);
        return redirect()->route('genre.index');
    }

    public function show($id)
    {
        $genre = genre::find($id);
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(GenreRequest $request, $id)
    {
        $genre = genre::find($id);
        $data = $request->validated();
        $genre->update($data);
        return redirect()->route('genre.show', $genre->id);
    }

    public function destroy($id)
    {
        $genre = genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
