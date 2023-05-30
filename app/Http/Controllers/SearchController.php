<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class SearchController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('name', 'LIKE', '%' . request('search') . '%')->get();
        return view('recipe')->with(compact('recipes'));
    }
}
