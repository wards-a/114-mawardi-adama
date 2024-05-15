<?php

namespace App\View\Components\User\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function isActive(string $path): string 
    {
        if (request()->is($path)) {
            return 'opacity-90';
        }

        return '';
    }

    public function isProductMenu(array $menu): string
    {
        if (isset($menu['category'])) {
            $icon_angle_down = <<<SVG
                <svg class="w-5 h-5 nav-shrink-transition" aria-hidden="true" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <use xlink:href="icons.svg#icon-angle-down" />
                </svg>
            SVG;
            return $icon_angle_down;
        }

        return '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.header.navbar');
    }
}
