<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Index page (main page)
Route::get('/', function () {
    return view('index');
});

// Login page
Route::get('/login', function(){
    return view('login');
});

// Register page
Route::get('/register', function(){
    return view('register');
});

// Marketplace page
Route::get('/marketplace', function(){
    return view('marketplace');
});