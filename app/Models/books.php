<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $guarded = [];


    public function authors()
    {
        return $this->belongsTo(authors::class, 'authorId', 'id');
    }

    public function genres()
    {
        return $this->belongsToMany(genres::class, 'book_genres', 'bookId', 'genreId');
    }

}
