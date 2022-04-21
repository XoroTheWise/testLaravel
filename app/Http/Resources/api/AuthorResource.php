<?php

namespace App\Http\Resources\api;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $books = [];
        foreach ($this->books as $book) {
            $books[] = [
                'id' => $book->id,
                'title' => $book->title,
            ];
        }

        $col = count($this->books);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'num-book' => $col,
            'books' => $books,
        ];
    }
}
