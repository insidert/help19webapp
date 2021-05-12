<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Spatie\Tags\Tag;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class StoreServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {   
        // dd($request->all());

        $data = $request->validate([
            'city' => 'nullable',
            'new_city' => Rule::requiredIf(function () {
                if (request()->city == "") {
                    return true;
                }
            }),
            'name' => 'required',
            'phone' => 'required|unique:services',
            'tags' => 'required'
        ], [
            'tags.required' => 'At least one tag is required for the service',
            'new_city' => 'Either select city from the dropdown or enter a new city.'
        ]);

        $city_id = $data['city'];

        if ($city_id == "") {
            $new_city = City::create(['name' => strtolower($data['new_city'])]);

            $city_id = $new_city->id;
        } 

        $service = Service::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'description' => $data['description'] ?? null,
            'address' => $data['address'] ?? null,
            'url' => $data['url'] ?? null,
            'city_id' => $city_id
        ]);

        $tags = Arr::flatten($request->tags);

        $service->tags()->sync($request->tags);

        return redirect()
            ->route('services.show', ['service' => $service->id])
            ->with('status', 'Thank you for adding a new service.');
    }
}
