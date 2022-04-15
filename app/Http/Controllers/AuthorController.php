<?php

namespace App\Http\Controllers;

use App\Models\authors;
use App\Models\books;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = authors::paginate(10);
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
        ]);
        authors::create($data);
        return redirect()->route('authors.index');
    }

    public function show(authors $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(authors $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(authors $author)
    {
        $data = request()->validate([
            'name' => 'string',
        ]);
        $author->update($data);
        return redirect()->route('authors.show', $author->id);
    }

    public function destroy(authors $author)
    {
        $author->delete();
        return redirect()->route('authors.index');
    }

}
