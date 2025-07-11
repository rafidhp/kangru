<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAchievement extends Model
{
    use HasFactory;

    protected $table = 'users_achievements';

    protected $fillable = [
        'avhievement_name',
        'image',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
