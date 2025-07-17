<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $table = 'advertisements';

    protected $fillable = [
        'title',
        'image',
        'description',
        'upload_date',
        'category_id',
        'advertiser_id',
    ];

    public function getHashidAttribute()
    {
        return app(\App\Services\HashidsService::class)->encode($this->id);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'advertiser_id');
    }
}
