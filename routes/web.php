<?php

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
 * We can interact with the database either through:
 * 1. Using raw SQL queries
 * 2. Query builder
 * 3. Eloquent ORM
 */

Route::get('/', function () {
    // 1. Raw SQL Queries
    $users = DB::select('select * from users');
    // dd($users);  // die dump

    // 2. Query Builder
    $users = DB::table('users')->select(['name', 'email'])
        ->whereNotNull('email')
        ->orderBy('name')
        ->get();
    // dd($users);

    // 3. Eloquent ORM
    $students = Student::all();
    // dd($students);
    foreach ($students as $student) {
        echo $student->name . "<br>";
    }
});

// Handles the /hello request
Route::get('/hello', function () {
    return view('hello');
});
