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