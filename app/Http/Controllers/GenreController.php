<?php

namespace App\Http\Controllers;

use App\Models\genres;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = genres::paginate(10);
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store()
    {
        $data = request()->validate([
            'genre' => 'string',
        ]);
        genres::create($data);
        return redirect()->route('genres.index');
    }

    public function show(genres $genre)
    {
        return view('genres.show', compact('genre'));
    }

    public function edit(genres $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(genres $genre)
    {
        $data = request()->validate([
            'genre' => 'string',
        ]);
        $genre->update($data);
        return redirect()->route('genres.show', $genre->id);
    }

    public function destroy(genres $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index');
    }
}
