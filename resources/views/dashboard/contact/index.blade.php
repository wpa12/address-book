@extends('dashboard.master')
@section('content')

<div class="row">
    @if(session('success'))
    <div class="col-lg-12">
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    </div>
    @endif
    <div class="col-lg-12">
        <div>
            <p>You have arrived at your current list of contacts</p>
        </div>
        
        <div class="row">
            <div class="col-lg-1">
    
                <a href="/dashboard/contacts/create" class="btn btn-primary">Create Contact</a>
            </div>
            <div class="col-lg-1"> 
                <a href="/dashboard/contacts/deleted" class="btn btn-primary">Restore a Contact</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-center">
            @foreach($contacts as $contact)
                {{-- {{ dd($contact->first_name) }} --}}
                <x-dashboard.contact.contact-card :gender="$contact->gender" class="col-lg-4">
                    <div class="avatar"></div>
                    <div>
                        {{ $contact->salutation . ' ' . $contact->first_name . ' ' .  $contact->middle_name . ' '. $contact->last_name }}
                    </div>
                    <div>
                        <p style="font-size:12px;">
                            {{  'Created at: ' .date_format($contact->created_at, 'd-m-Y H:i:s') }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/dashboard/contacts/show/{{ $contact->id }}" class="btn btn-success">Update</a>
                        <form action="/dashboard/contacts/delete/{{ $contact->id }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <a href="/dasboard/address-book/create/{{ $contact->id }}" class="btn btn-primary">Add an Address</a>
                    </div>
                </x-dashboard.contact.contact-card>
            @endforeach
        </div>
    </div>
</div>

@endsection