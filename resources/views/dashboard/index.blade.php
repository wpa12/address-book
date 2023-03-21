@extends('dashboard.master')
@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h2>Welcome</h2>
                    <p>
                        Welcome to the Wayne's Address book Dashboard.                    
                    </p>
                </div>
                
                <div class="mt-5">
                    
                    <h4>Creating a Contact</h4>
                    <p>
                        Here is a breif overview of the contact system.
                    </p>                  
                    <ol>
                        <li><strong>Navigate to contacts</strong></li>
                        <li><strong>Click 'create' contact</strong></li>
                        <li><strong>Fill out the form and submit</strong></li>
                    </ol>
                    <p>
                        The created contacts will appear as cards on the contacts page, each card will display an option to either update, delete, or add an address - an additional option is available to view contact data that was stored on contact creation.
                    </p>
                    
                    <p>
                        It is worth noting that when a contact is deleted, they can be restored by clicking the 'Restore a contaact' button, which will navigate you to all the deleted contacts - simply restore a contact to the active contacts list by hitting the 'Restore contact' button on the card.
                        
                    </p>
                    
                    <h4>Viewing an Address</h4>
                    
                    <p>
                        To view addresses, navigate to the 'Address Book'. In this section a table consisting of all addresses linked to each contact will be displayed - please note that any and all addresses linked to a deleted contacted will no appear in the table (until the contact has been restored).
                    </p>
                    <p>
                        A filter has been supplied, that will filter each addressed based on contact name.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection