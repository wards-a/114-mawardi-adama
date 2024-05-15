<?php

namespace App\View\Components\User\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MobileNavItem extends Component
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

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.header.mobile-nav-item');
    }
}
