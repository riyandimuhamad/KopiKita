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

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data ke database
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        Menu::create($request->all())

        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambah!');
    }


}

