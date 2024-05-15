<?php

namespace App\View\Components\User\Footer;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductsNav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $menu,
    )
    {
        $this->menu = $menu;
    }

    public function getProduct(): array 
    {
        foreach ($this->menu['text'] as $item) {
            if ($item['name'] == 'Produk') {
                $product = $item;
            }
        }

        return $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.footer.products-nav');
    }
}
