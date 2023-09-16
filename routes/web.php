<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('pages/home');
});

// single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});


// show all listings 

Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
});

// user saved listings 

Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');

// user show status 

Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
