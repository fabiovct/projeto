<?php

namespace App\Http\Controllers\Admin;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function index()
    {
        return Restaurant::all();
    }

    public function new()
    {
        return view('admin.restaurants.store');
    }

    public function store(Request $request)
    {
        $restaurantData = $request->all();
        $restaurant = new Restaurant();
        $restaurant->create($restaurantData);
        print 'restaurante criado com sucesso';
    }

    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $restaurantData = $request->all();

        $restaurant = Restaurant::findOrFail($id);
        $restaurant->update($restaurantData);
        print 'restaurante atualizado com sucesso';
    }

}