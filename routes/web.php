<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\LegalPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StartNowRequestController;

Route::inertia('/', 'Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::post('/contact', [\App\Http\Controllers\ContactRequestController::class, 'store'])
    ->name('contact.store');
Route::get('/start-now', [StartNowRequestController::class, 'index'])->name('start-now.index');
Route::post('/start-now', [StartNowRequestController::class, 'store'])->name('start-now.store');
Route::get('/legal/{code}', [LegalPageController::class, 'show'])->name('legal.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
