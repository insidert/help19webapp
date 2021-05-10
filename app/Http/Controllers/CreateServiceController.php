<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class CreateServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $all_tags = Tag::all();

        $types = Tag::getTypes();

        $tags = [];

        for ($i=0; $i < count($types); $i++) { 
            $tags[$types[$i]] = [];
        }

        for ($i=0; $i < count($all_tags); $i++) { 
            $type = $all_tags[$i]['type'];
            
            $name = $all_tags[$i]['name'];

            array_push($tags[$type], $name);
        }

        return view('services.create', compact('tags'));
    }
}
