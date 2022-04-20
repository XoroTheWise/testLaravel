<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Genre
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Book $book
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Genre extends Model
{
    use HasFactory;


    protected $guarded = [
        'id' => 'integer',
        'name' => 'string',
    ];
    protected $fillable = ['name'];

    public function book()
    {
        return $this->belongsTo(book::class, 'genre_id', 'id');
    }
}
