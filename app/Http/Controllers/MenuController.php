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

        Menu::create($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambah!');
    }

    public function destroy(Menu $menu)
{
    $menu->delete();
    return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus!');
}

// 1. Fungsi untuk menampilkan form edit
public function edit(Menu $menu)
{
    return view('menus.edit', compact('menu'));
}

// 2. Fungsi untuk menyimpan perubahan
public function update(Request $request, Menu $menu)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'status' => 'required'
    ]);

    $menu->update($request->all());

    return redirect()->route('menus.index')->with('success', 'Menu berhasil diperbarui!');
}

}

