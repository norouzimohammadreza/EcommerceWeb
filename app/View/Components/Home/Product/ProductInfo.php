<?php

namespace App\View\Components\Home\Product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductInfo extends Component
{
    /**
     * Create a new component instance.
     */
    public $product;
    public function __construct($product)
    {
        $this->product=$product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.product.product-info');
    }
}
