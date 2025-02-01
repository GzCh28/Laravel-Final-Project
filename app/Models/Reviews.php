<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'content',
        'point',
        'user_id',
        'film_id',
    ];

    public function toUserTable() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function toFilmTable() {
        return $this->belongsTo(Film::class, 'film_id');
    }
}
