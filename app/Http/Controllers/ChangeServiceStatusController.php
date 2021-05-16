<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Http\Request;

class ChangeServiceStatusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Service $service)
    {
        $service->update([
            'status' => [
                'name' => $request->name,
                'markedOn' => Carbon::now()->format('M d, Y -  h:i a')
            ]
        ]);

        return response()->json([
            'status' => 'ok'
        ]);
    }
}
