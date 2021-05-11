<?php

namespace App\Queries;

use DB;
use App\Models\Tag;
use Illuminate\Support\Arr;

class TagQueries
{
    public static function allTypes()
    {
        $tags_types = DB::table('tags')->selectRaw("DISTINCT type")->get();

        return Arr::pluck($tags_types, 'type');
    }

    public static function tagsByType()
    {
        $tag_types = Self::allTypes();

        $all_tags = Tag::select('id', 'name', 'type')->get();

        $tags = [];

        foreach ($all_tags as $tag) {
            # code...
        }

        foreach ($tag_types as $type) {
            $tags[$type] = [];
        }

        foreach ($all_tags as $tag) { 
            array_push($tags[$tag->type], ['id' => $tag->id, 'name' => $tag->name]);
        }

        return $tags;
    }
}