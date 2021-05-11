<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Tag;
use Illuminate\Support\Arr;

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
        $city_name = Tag::select('name')->where('id', $city)->first();

        $service_tags = DB::table('service_tag')->select('service_id')->where('tag_id', $city)->get();

        $services = Service::with('tags:name')->whereIn('id', Arr::pluck($service_tags, 'service_id'))->get();

        return view('cities.show', compact('services', 'city_name', 'city'));
    }
}
