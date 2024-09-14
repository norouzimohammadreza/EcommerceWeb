<?php

namespace App\View\Components\Home\Master;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopNav extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories,$products;
    public function __construct($categories , $products)
    {
        $this->categories=$categories;
        $this->products=$products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.master.top-nav');
    }
}
