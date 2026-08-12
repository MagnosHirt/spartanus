<?php

use App\Http\Controllers\AniversariantesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('aniversariantes', [AniversariantesController::class, 'index'])->name('aniversariantes');
});

require __DIR__.'/settings.php';
