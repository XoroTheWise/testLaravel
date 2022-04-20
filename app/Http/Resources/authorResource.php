<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class authorResource extends JsonResource
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
            'book' => $books,
        ];
    }
}
