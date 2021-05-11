<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Spatie\Tags\Tag;
use Illuminate\Support\Arr;

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
        $data = $request->validate([
            'name' => 'required',
            'contact' => 'required|unique:services',
            'tags' => 'required'
        ], [
            'tags.required' => 'At least one tag is required for the service'
        ]);

        unset($data['tags']);

        $service = Service::create($data);

        $tags = Arr::flatten($request->tags);

        $service->tags()->sync($request->tags);

        return redirect()
            ->route('services.show', ['service' => $service->id])
            ->with('status', 'Thank you for adding a new service.');
    }
}
