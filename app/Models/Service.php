<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => 'array'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
