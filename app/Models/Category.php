<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category_name',
    ];

    public function mentor()
    {
        return $this->belongTo(Mentor::class);
    }

    public function article()
    {
        return $this->belongTo(Article::class);
    }
}