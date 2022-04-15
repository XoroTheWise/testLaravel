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
            $genres[] = $genre->genre;
        }

        return [
            'Id' => $this->id,
            'Title' => $this->title,
            'Author' => $this->authors->name,
            'Genres' => $genres,
        ];
    }
}
