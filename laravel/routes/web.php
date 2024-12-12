<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PricingController;

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('games', [GameController::class, 'games'])->name('games');
Route::get('games/{slug}', [GameController::class, 'games_slug'])->name('games.slug');
Route::get('get-games', [GameController::class, 'get_games'])->name('get.games');
Route::get('about-us', [HomePageController::class, 'about_us'])->name('about.us');
Route::get('contact-us', [HomePageController::class, 'contact_us'])->name('contact.us');
Route::get('terms-and-conditions', [HomePageController::class, 'terms_and_conditions'])->name('terms.and.conditions');
Route::get('privacy-policy', [HomePageController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('pricing', [PricingController::class, 'pricing'])->name('pricing');
Route::post('add-cart', [PricingController::class, 'add_cart'])->name('add.cart');
Route::get('checkout', [PricingController::class, 'checkout'])->name('cart.checkout');
Route::get('remove', [PricingController::class, 'remove'])->name('cart.remove');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
