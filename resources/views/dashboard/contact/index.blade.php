@extends('dashboard.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div>
            <p>You have arrived at your current list of contacts</p>
        </div>
        
        <div class="row">
            <div class="col-lg-1">
    
                <a href="/dashboard/contacts/create" class="btn btn-primary">Create Contact</a>
            </div>
            <div class="col-lg-1"> 
                <a href="/dashboard/contacts/deleted" class="btn btn-primary">Deleted Contacts</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            @foreach($contacts as $contact)
                {{-- {{ dd($contact->first_name) }} --}}
                <x-dashboard.contact.contact-card>
                    <div class="avatar"></div>
                    <div>
                        {{ $contact->salutation . ' ' . $contact->first_name . ' ' .  $contact->middle_name . ' '. $contact->last_name }}
                    </div>
                    <div>
                        {{  date_format($contact->created_at, 'd-m-Y H:i:s') }}
                    </div>
                    <div>
                        <a href="/dashboard/contacts/show/{{ $contact->id }}" class="btn btn-success">Update</a>
                        <form action="/dashboard/contacts/delete/{{ $contact->id }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </x-dashboard.contact.contact-card>
            @endforeach
        </div>
    </div>
</div>

@endsection