<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
});


Route::resource('events', EventController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/events/clear', [EventController::class, 'clear'])->name('events.clear');

