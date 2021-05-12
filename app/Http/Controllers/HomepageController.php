<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

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
        $cities = City::select('id', 'name', 'state')->orderBy('name', 'asc')->get();

        return view('homepage', compact('cities'));
    }
}
