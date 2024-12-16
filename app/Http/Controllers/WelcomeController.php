<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Handles the request '/'
    public function index()
    {
        return view('welcome');
    }
}
