<?php

use App\Http\Controllers\MarketController;
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
Route::get('/', [MarketController::class, 'index']);

// Login page
Route::get('/login', [MarketController::class, 'login']);

// Register page
Route::get('/register', [MarketController::class, 'register']);

// Marketplace page
Route::get('/marketplace', [MarketController::class, 'marketplace']);

// Contact page
Route::get('/contact', [MarketController::class, 'contact']);

// Team page
Route::get('/team', [MarketController::class, 'team']);

// Add Listing page
Route::get('/add-listing', [MarketController::class, 'addListing']);