<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actors;

class Cast extends Model
{
    use HasFactory;

    protected $table = 'cast';

    protected $fillable = [
        'name',
        'age',
        'bio',
    ];

    public function toActorsTable() 
    {
        return $this->hasMany(Actors::class, 'cast_id');
    }
}
