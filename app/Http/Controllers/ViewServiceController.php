<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ViewServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $service)
    {
        $service = Service::with('tags')->where('id', $service)->first();

        if (empty ($service)) {
            abort(404);
        }

        return view('services.show', compact('service'));
    }
}
