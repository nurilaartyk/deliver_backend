<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $carts = Cart::where('user_id', $user_id)->get();
        $count_cart = $carts->sum(function ($cart) {
            return $cart->count;
        });
        $sum_cart = $carts->sum(function ($cart) {
            return $cart->menu->cost * $cart->count;
        });
        return view('cart')
            ->with(compact('carts'))
            ->with(compact('sum_cart'))
            ->with(compact('count_cart'));
    }

    public function up(Cart $cart)
    {
        $cart->count++;
        $cart->save();
        return redirect()->route('cart.index');
    }

    public function down(Cart $cart)
    {
        if ($cart->count == 1) {
            $cart->delete();
            return redirect()->route('cart.index');
        }

        $cart->count--;
        $cart->save();
        return redirect()->route('cart.index');
    }

    public function delete(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index');
    }
}
