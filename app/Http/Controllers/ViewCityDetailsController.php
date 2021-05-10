<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Spatie\Tags\Tag;

class ViewCityDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $city)
    {
        $tag = Tag::findOrCreate($city, 'city');

        $services = Service::withAnyTags([$tag])->get();

        $tag_types = Tag::getTypes();

        $tag_types = array_diff($tag_types->toArray(), ['city', 'state', 'district', null]);

        return view('cities.show', compact('services', 'city', 'tag_types'));
    }
}
