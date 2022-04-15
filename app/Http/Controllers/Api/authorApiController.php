<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\authorUpdateRequest;
use App\Http\Resources\authorResource;
use App\Models\authors;
use Illuminate\Http\Request;

class authorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return authorResource::collection(authors::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $authors = new authorResource(authors::findOrFail($id));
        return $authors;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(authorUpdateRequest $request, $id)
    {
        $author = authors::findOrFail($id);
        $authorI = authors::find(auth()->user()->id);
        if (auth()->user()->id != $author->id) {
            return ' This is not Your profile. Your profile ' . $authorI;
        }
        if (auth()->user()->id == $author->id) {
            $author->update($request->validated());
            return 'Update successful ' . $author;
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
        //
    }
}
