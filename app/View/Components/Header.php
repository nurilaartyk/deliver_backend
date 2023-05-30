<?php

namespace App\View\Components;

use App\Models\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $count_cart = 0;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $user_id = 0;
        if (auth()->user()) {
            $user_id = auth()->user()->id;
        }
        $carts = Cart::where('user_id', $user_id)->get();
        $this->count_cart = $carts->sum(function ($cart) {
            return $cart->count;
        });
        return view('components.header');
    }
}
