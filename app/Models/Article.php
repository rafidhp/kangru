<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'writers',
        'title',
        'image',
        'content',
        'upload_date',
        'category_id',
    ];

    public function getHashidAttribute()
    {
        return app(\App\Services\HashidsService::class)->encode($this->id);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
