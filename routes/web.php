<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController; 

// 1. Rute Halaman Utama (Langsung ke Katalog)
Route::get('/', [MenuController::class, 'index'])->name('menus.index');

// 2. Rute CRUD Katalog
Route::prefix('katalog')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('menus.index');
    Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/', [MenuController::class, 'store'])->name('menus.store');
    Route::get('/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::put('/{menu}', [MenuController::class, 'update'])->name('menus.update');
    Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
});