<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    use HasFactory;

    protected $table = 'advertisers';

    protected $fillable = [
        'no_telepon',
        'instansi',
        'NPWP/SIUP',
        'status',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
