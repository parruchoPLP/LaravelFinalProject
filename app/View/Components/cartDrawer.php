<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cartDrawer extends Component
{
    /**
     * Create a new component instance.
     */
    public $cartItems;

    public function __construct($cartItems)
    {
        $this->cartItems = $cartItems;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart-drawer');
    }
}
