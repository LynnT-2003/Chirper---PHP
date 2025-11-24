<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// this is bad practice, we should not return views directly from routes
// instead set up controllers classes, and call the methods from there
// this keeps everything strongly archetyped, clean, and modularized
// Route::get('/', function () {
//     return view('home');
// });

// import Controller as Class, then pass in the Method (i.e. index, show, etc.)
// we call this ChirpController the Class
// and we call this index as the Method from that Controller Class
Route::get('/', [ChirpController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});