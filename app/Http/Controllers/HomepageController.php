<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cities = Tag::where('type', 'city')->orderBy('name', 'asc')->get();

        return view('homepage', compact('cities'));
    }
}
