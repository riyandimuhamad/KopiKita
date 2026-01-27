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

// 5. Rute untuk menghapus data
Route::delete('/katalog/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');

// 6. Rute untuk update data 
Route::get('/katalog/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');

// Memproses perubahan data (menggunakan method PUT)
Route::put('/katalog/{menu}', [MenuController::class, 'update'])->name('menus.update');