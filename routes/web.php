<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
use App\Models\MarketplaceData;

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

// Home page
Route::get('/', [MarketController::class, 'index']);

// Contact page
Route::get('/contact', [MarketController::class, 'contact']);

// Team page
Route::get('/team', [MarketController::class, 'team']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Marketplace (all postings)
Route::get('/marketplace', [MarketController::class, 'marketplace'])->middleware('auth');

// Add listing page
Route::get('/add-listing', [MarketController::class, 'addListing'])->middleware('auth');

// Add a listing
Route::post('/add-listing', function(){
    MarketplaceData::create([
        'product' => request('product'),
        'category' => request('category'),
        'price' => request('price'),
        'contact' => request('contact'),
        'company' => request('company')
    ]);
    return redirect('/marketplace');
});


// Logout
Route::get('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

// 
// Login /login (added by Breeze)
// Register /register (added by Breeze)
// 

require __DIR__.'/auth.php';
