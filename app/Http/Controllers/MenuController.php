<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
    $menus = Menu::all(); //Mengambil semua data menu dari database
        return view('menus.index', compact('menus'));
    }
}

