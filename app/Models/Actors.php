<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;

    protected $table = 'actors';

    protected $fillable = [
        'name',
        'cast_id',
        'film_id',
    ];

    public function toCastTable() {
        return $this->belongsTo(Cast::class, 'cast_id');
    }

    public function toFilmTable() {
        return $this->belongsTo(Film::class, 'film_id');
    }
}
