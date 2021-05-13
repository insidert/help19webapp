<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomepageController,
    ViewCityDetailsController,
    ViewServiceController,
    CreateServiceController,
    StoreServiceController
};

Route::get('/', HomepageController::class)->name('home');
Route::get('cities/{city}', ViewCityDetailsController::class)->name('cities.show');
Route::get('services/create', CreateServiceController::class)->name('services.create');
Route::post('services/store', StoreServiceController::class)->name('services.store');
Route::get('services/{service}', ViewServiceController::class)->name('services.show');
Route::view('contribute', 'contribute');
Route::view('contact', 'contact');
