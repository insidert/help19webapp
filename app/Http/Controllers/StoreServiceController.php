<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Spatie\Tags\Tag;

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

        $service = Service::create($data);

        foreach ($request->tags as $key => $tag) {
            logger($key);
            
            $tag_with_type = Tag::findOrCreate($tag, $key);

            logger($tag_with_type);
            
            $service->attachTag($tag_with_type, $key);
        }

        return redirect()
            ->route('services.show', ['service' => $service->id])
            ->with('status', 'Thank you for adding a new service.');
    }
}
