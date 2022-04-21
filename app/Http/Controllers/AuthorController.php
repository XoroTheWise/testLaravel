<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = author::paginate(10);
        return view('author.index', compact('authors'));
    }

    public function create()
    {
        return view('author.create');
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        $author = Author::find($id);
        return view('author.show', compact('author'));
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('author.edit', compact('author'));
    }

    public function update(AuthorRequest $request, $id)
    {
        $author = Author::find($id);
        $data = $request->validated();
        $author->update($data);
        return redirect()->route('author.show', $author->id);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('author.index');
    }

}
