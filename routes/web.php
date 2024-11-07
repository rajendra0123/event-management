<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Show all events
Route::get('/', [ListingController::class, 'welcome'])->name('welcome');

//create events
Route::get('/listings/create', [ListingController::class, 'create']);

//store events data
Route::post('/listings', [ListingController::class, 'store']);

