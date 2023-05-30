<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe')->with(compact('recipes'));
    }

    public function show()
    {
        $recipes = Recipe::all();
        dd($recipes);
        return view('recipe-read');
    }
}
