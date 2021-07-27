@extends('dashboard.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2>Restore Contact</h2>
    </div>
    @if(session('success'))
        <div class="col-lg-12">
            
            <div class="alert alert-success">{{ session('success') }} <a href="/dashboard/contacts">click here</a> to view contacts</div>
        </div>
    @endif
    <div class="col-lg-12">
        <div class="row justify-content-center">

            @foreach($contacts as $contact)
            <x-dashboard.contact.contact-card :gender="$contact->gender" class="col-lg-4 text-center">
                <div class="avatar"></div>
                <div>
                    {{ $contact->salutation . ' ' . $contact->first_name . ' ' .  $contact->middle_name . ' '. $contact->last_name }}
                </div>
                <div>
                    <p style="font-size:12px;">
                        {{  'Delete at: ' .date_format($contact->deleted_at, 'd-m-Y H:i:s') }}
                    </p>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <form action="/dashboard/contacts/restore/{{ $contact->id }}" method="post">
                        @csrf
                        @method('patch')
                        <button class="btn btn-danger" type="submit">Restore Contact</button>
                    </form>
                </div>
            </x-dashboard.contact.contact-card>
            @endforeach
        </div>
        
    </div>
</div>

@endsection