<?php

namespace App\View\Components;

use App\Services\ACF\Groups\HeroGroup;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExampleComponent extends Component
{
    public $test;

    /**
     * Create a new component instance.
     */
    public function __construct(HeroGroup $heroGroup)
    {
        //$this->test = $heroGroup->getTitle();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.example-component');
    }
}
