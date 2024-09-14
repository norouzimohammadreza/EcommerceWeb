<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ViewProducts extends Component
{
    /**
     * Create a new component instance.
     */
    public $products;
    public function __construct($products)
    {
        $this->products=$products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.view-products');
    }
}
