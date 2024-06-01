<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showDeliveryAndShipping()
    {
        return view('delivery-and-shipping');
    }
    public function showPayment()
    {
        return view('payment');
    }
    public function showAboutus()
    {
        return view('aboutus');
    }
}
