<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Tag, City};
use App\Queries\TagQueries;

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
        $tags = TagQueries::tagsByType();

        $cities = City::select('id', 'name')->orderBy('name', 'asc')->get();

        return view('services.create', compact('tags', 'cities'));
    }
}
