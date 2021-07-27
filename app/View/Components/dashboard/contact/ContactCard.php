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
    public $gender;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($salutation='', $first_name ='', $middle_name = '', $last_name='', $date_created='', $gender='')
    {
        $this->salutation = $salutation;
        $this->firstName = $first_name;
        $this->middleName = $middle_name;
        $this->lastName = $last_name;
        $this->gender = $gender;
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
    }
}
