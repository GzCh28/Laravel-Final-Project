<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Actors;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $fillable = ['title', 'summary', 'release_year', 'poster', 'genre_id'];

    public function toGenreTable() {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function toReviewTable() 
    {
        return $this->hasMany(Reviews::class, 'film_id');
    }

    public function toActorsTable() 
    {
        return $this->hasMany(Actors::class, 'film_id');
    }

}
