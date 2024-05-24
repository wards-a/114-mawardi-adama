<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MultipleOptions extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $value,
        public string $option,
        public string $label,
        public string $class,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.multiple-options');
    }
}
