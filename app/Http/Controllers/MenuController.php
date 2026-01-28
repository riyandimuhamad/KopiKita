<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create() {
        return view('menus.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);
        Menu::create($request->all());
        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambah!');
    }

    public function edit(Menu $menu) {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'status' => 'required'
        ]);
        $menu->update($request->all());
        return redirect()->route('menus.index')->with('success', 'Menu berhasil diperbarui!');
    }

    public function destroy(Menu $menu) {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus!');
    }
}