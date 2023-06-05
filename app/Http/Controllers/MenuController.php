<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restauran;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $restaurants = Restauran::all();
        return view('menu')->with(compact('restaurants'));
    }

    public function show(Restauran $restauran)
    {
        $menus = Menu::where('restauran_id', $restauran->id)->get();
        return view('menu-single')->with(compact('menus'))->with(compact('restauran'));
    }

    public function search(Restauran $restauran, Request $request)
    {
        if ($request->category_id == 0) {
            $menus = Menu::where('restauran_id', $restauran->id)->get();
        } else {
            $menus = Menu::where('restauran_id', $restauran->id)->where('filter', $request->category_id)->get();
        }

        return view('menu-single')->with(compact('menus'))->with(compact('restauran'));
    }

    public function oreder()
    {
        return view('menu-single');
    }
}
