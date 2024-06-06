<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class successAlert extends Component
{
    /**
     * Create a new component instance.
     */
    public $successTitle;
    public $successInfo;
    public function __construct($successTitle, $successInfo)
    {
        $this->successTitle = $successTitle;
        $this->successInfo = $successInfo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.success-alert');
    }
}
