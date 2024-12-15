<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Passes the assoc array with 'name' as element in 'home' view 
// Maps it as independent variable in view
Route::get('/home', function () {
    return view('home', ["name" => "Joe"]);
});
