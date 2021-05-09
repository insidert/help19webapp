<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;

Route::get('/', function () {
    return Service::all();
});
