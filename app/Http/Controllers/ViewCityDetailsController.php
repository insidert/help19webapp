<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\{Tag, City};
use Illuminate\Support\Arr;
use App\Queries\TagQueries;
use Illuminate\Database\Eloquent\Builder;

class ViewCityDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,City $city)
    {
        if (empty ($city)) {
            abort(404);
        }

        $tags_for_filters = TagQueries::tagsByType();

        $services_query = Service::with('tags:name');

        $tag_name = "";

        if ($request->has('filter')) {
            $services_query = $services_query->whereHas('tags', function (Builder $query) {
                $query->where('tag_id', request()->filter);
            });

            $tag_name = Tag::select('name', 'type')->where('id', request()->filter)->first();
        }

        $services = $services_query->where('city_id', $city->id)->paginate(5)->withQueryString();
        
        return view('cities.show', compact('services', 'city', 'tags_for_filters', 'tag_name'));
    }
}
