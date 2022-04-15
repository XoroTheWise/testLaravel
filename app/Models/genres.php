<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $guarded = [];
    protected $fillable = ['genre'];

    public function books()
    {
        return $this->belongsTo(books::class, 'genreId', 'id');
    }
}
