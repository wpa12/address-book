<?php

namespace App\View\Components\main;

use Illuminate\View\Component;

class navigation extends Component
{

    public $nav_items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->nav_items = [
            'Home' => '/',
            'Find a Record' => '#search',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $nav_items = $this->nav_items;

        return view('components.main.navigation', compact('nav_items'));
    }
}
