<?php

namespace App\View\Components\dashboard;

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
            'logout' => '/dashboard/logout',
            'Dashboard'  => '/dashboard',
            'View site' => '/',
            'Address Book' => '/dashboard/address-book',
            'Contacts'  => '/dashboard/contacts',
            'Deleted Items' => '/dashboard/address-book/restore',
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
