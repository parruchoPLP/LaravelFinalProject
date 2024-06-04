<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationBar extends Component
{
    public $allkeyphone;

    public function __construct($allkeyphone)
    {
        $this->allkeyphone = $allkeyphone;
    }

    public function render()
    {
        return view('components.navigation-bar');
    }
}