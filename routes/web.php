<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Handles the /hello request
Route::get('/hello', function () {
    return view('hello');
});
