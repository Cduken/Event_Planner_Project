<?php

use App\Http\Controllers\EventController;


Route::get('/', function () {
    return view('home');
});


Route::resource('events', EventController::class);
Route::post('/events/clear', [EventController::class, 'clear'])->name('events.clear');

