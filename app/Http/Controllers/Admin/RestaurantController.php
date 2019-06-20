<?php

namespace App\Http\Controllers\Admin;


use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants =  Restaurant::all();
        return view ('admin.restaurants.index', compact('restaurants'));
    }

    public function new()
    {
        return view('admin.restaurants.store');
    }

    public function store(RestaurantRequest $request)
    {
        $restaurantData = $request->all();

        $request->validated();

        $restaurant = new Restaurant();
        $restaurant->create($restaurantData);
        flash('restaurante criado com sucesso')->success();
        return redirect()->route('restaurants.index');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    public function update(RestaurantRequest $request, $id)
    {
        $restaurantData = $request->all();
        $request->validated();
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($restaurantData);
        flash('restaurante atualizado com sucesso')->success();
        return redirect()->route('restaurants.index');
    }

    public function delete($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
        flash('restaurante deletado com sucesso')->success();
        return redirect()->route('restaurants.index');
    }

}
