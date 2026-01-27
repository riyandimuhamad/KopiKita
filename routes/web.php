<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// 1. Rute Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// 2. Rute Katalog Kopi
Route::get('/katalog', [MenuController::class, 'index'])->name('menus.index');

// 3. Rute untuk menampilkan form
Route::get('/katalog/create', [MenuController::class, 'create'])->name('menus.create');

// 4. Rute untuk menyimpan data
Route::post('/katalog', [MenuController::class, 'store'])->name('menus.store');