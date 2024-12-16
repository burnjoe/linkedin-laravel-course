<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Handles the request from index() method of WelcomeController class
Route::get('/', [WelcomeController::class, 'index']);

// Passes the assoc array with 'name' as element in 'home' view 
// Maps it as independent variable in view
Route::get('/home', function () {
    return view('home', ["name" => "Joe"]);
});

Route::get('/about', function () {
    return view('about');
});
