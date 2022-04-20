<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class bookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $genres = [];
        foreach ($this->genres as $genre) {
            $genres[] = [
                'id' => $genre->id,
                'name' => $genre->name,
            ];
        }

        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author->name,
            'genre' => $genres,
        ];
    }
}
