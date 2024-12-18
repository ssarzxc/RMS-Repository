<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('services', ([ServiceController::class, 'index']));

Route::get('/googlemap', 'App\Http\Controllers\MapController@googlemap')->name('googlemap');
