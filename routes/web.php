<?php

use App\Http\Controllers\AniversariantesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [AniversariantesController::class, 'dashboard'])->name('dashboard');
    Route::get('aniversariantes', [AniversariantesController::class, 'index'])->name('aniversariantes');
    Route::get('aniversariantes/create', [AniversariantesController::class, 'create'])->name('aniversariantes.create');
    Route::post('aniversariantes', [AniversariantesController::class, 'store'])->name('aniversariantes.store');
    Route::get('aniversariantes/{id}/edit', [AniversariantesController::class, 'edit'])->name('aniversariantes.edit');
    Route::put('aniversariantes/{id}', [AniversariantesController::class, 'update'])->name('aniversariantes.update');
    Route::delete('aniversariantes/{id}', [AniversariantesController::class, 'destroy'])->name('aniversariantes.destroy');
});

require __DIR__.'/settings.php';
