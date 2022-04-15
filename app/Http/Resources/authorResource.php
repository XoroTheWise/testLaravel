<?php

namespace App\Http\Resources;

use App\Models\books;
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
            $books[] = $book->title;
        }

        $col = count($this->books);
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'NumBook' => $col,
            'Books' => $books,
        ];
    }
}
