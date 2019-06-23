<?php

namespace App\Http\Controllers\Admin;


use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        $menus =  Menu::all();
        return view ('admin.menus.index', compact('menus'));
    }

    public function new()
    {
        return view('admin.menus.store');
    }

    public function store(MenuRequest $request)
    {
        $menuData = $request->all();

        $request->validated();

        $menu = new Menu();
        $menu->create($menuData);
        flash('menu criado com sucesso')->success();
        return redirect()->route('menus.index');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(MenuRequest $request, $id)
    {
        $menuData = $request->all();
        $request->validated();
        $menu = Menu::findOrFail($id);
        $menu->update($menuData);
        flash('menu atualizado com sucesso')->success();
        return redirect()->route('menus.index');
    }

    public function delete($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        flash('menu deletado com sucesso')->success();
        return redirect()->route('menus.index');
    }

}
