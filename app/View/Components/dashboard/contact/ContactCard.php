<?php

namespace App\View\Components\dashboard\contact;

use Illuminate\View\Component;

class ContactCard extends Component
{

    public $salutation; 
    public $firstName;
    public $middleName; 
    public $lastName; 
    public $dateCreated;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($salutation='', $first_name ='', $middle_name = '', $last_name='', $date_created='')
    {
        $this->salutation = $salutation;
        $this->firstName = $first_name;
        $this->middleName = $middle_name;
        $this->lastName = $last_name;
        $this->dateCreated = $date_created;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.contact.contact-card');
        // ->with([
        //     'salutation' => $this->salutation,
        //     'first_name' => $this->first_name,
        //     'middle_name' => $this->middle_name,
        //     'last_name' => $this->last_name,
        //     'date_created' => $this->date_created,
        // ]);
    }
}
