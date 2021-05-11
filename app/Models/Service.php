<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function ofACity($city_id)
    {
        return $this->belongsToMany(Tag::class)->wherePivot('tag_id', $city_id);
    }
}
