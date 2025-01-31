<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'age',
        'bio',
        'user_id',
    ];

    public function toUserTable() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
