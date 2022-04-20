<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\authorUpdateRequest;
use App\Http\Resources\authorResource;
use App\Models\author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class authorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return authorResource::collection(author::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        if (!author::find($id)) {
            $data = [
                'error' => 'There is no author with this id',
            ];
            return $data;
        }
        return new authorResource(author::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(authorUpdateRequest $request, $id)
    {
        if (!author::find($id)) {
            $data = [
                'error' => 'There is no author with this id',
            ];
            return $data;
        }

        $author = author::findOrFail($id);
        $authorAuth = author::find(auth()->user()->id);
        if ($authorAuth->id != $author->id) {
            $data = [
                'message' => 'This is not Your profile. Your profile',
                'author' => [
                    'id' => $authorAuth->id,
                    'role' => $authorAuth->role,
                    'name' => $authorAuth->name,
                    'email' => $authorAuth->email,
                ],
            ];
            return $data;
        } else {
            if ($author->update($request->validated())) {
                $data = [
                    'message' => 'Update successful',
                    'author' => [
                        'id' => $author->id,
                        'role' => $author->role,
                        'name' => $author->name,
                        'email' => $author->email,
                    ],
                ];
                return $data;
            } else {
                $data = [
                    'message' => 'Failed updated!('
                ];
                return $data;
            }
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
        //
    }
}
