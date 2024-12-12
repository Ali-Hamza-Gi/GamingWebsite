<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('games', [GameController::class, 'games'])->name('games');
Route::get('get-games', [GameController::class, 'get_games'])->name('get.games');
Route::get('about-us', [HomePageController::class, 'about_us'])->name('about.us');
Route::get('pricing', [HomePageController::class, 'pricing'])->name('pricing');
Route::get('contact-us', [HomePageController::class, 'contact_us'])->name('contact.us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
