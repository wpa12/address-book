<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class Navigation extends Component
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
            'Logout' => '/dashboard/logout',
            'Dashboard'  => '/dashboard',
            'Address Book' => '/dashboard/address-book',
            'Contacts'  => '/dashboard/contacts',
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
        return view('components.dashboard.navigation', compact('nav_items'));
    }
}
