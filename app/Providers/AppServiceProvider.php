<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CartItem;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            if (auth()->check()) {
                $cart = CartItem::where('user_id', auth()->id())->with('product')->get();
                $view->with('cartItems', $cart);
            }
        });
    }
}
