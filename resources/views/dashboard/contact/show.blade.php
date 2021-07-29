@extends('dashboard.master')
@section('content')

<div class="row justify-content-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h2>{{ $contact->salutation . ' ' . $contact->first_name . ' ' . $contact->middle_name . ' ' . $contact->last_name }}</h2>
            </div>
            <div class="col-lg-12 details-container mt-5 p-3">

                <ul>
                    <li><strong>Gender: </strong>{{ ucfirst($contact->gender) }}</li>
                    <li><strong>D.O.B: </strong>
                        @php
                            $date = new DateTime($contact->dob);
                            $dob = $date->format('d/m/Y');
                            echo $dob;
                        @endphp
                    </li>
                    <li><strong>Email: </strong><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                    <li><strong>Tel: </strong> <a href="tel:{{ $contact->tel }}">{{ $contact->tel }}</a></li>
                    <li><strong>Description: </strong> <br> {{ $contact->description }}</li>
                    <li><strong>Created at: </strong>
                        @php
                            $date = new DateTime($contact->created_at);
                            $created_at = $date->format('d/m/Y H:i:s');
                            echo $created_at;
                        @endphp
                    </li>                    
                    <li><strong>Updated at: </strong>
                        @php
                            $date = new DateTime($contact->updated_at);
                            $updated_at = $date->format('d/m/Y H:i:s');
                            echo $updated_at;
                        @endphp
                    </li>
                </ul>
                <p><a href="/dashboard/contacts"><- Back</a></p>
            </div>
        </div>
    </div>
</div>

<style>
    .details-container {
        width:100%;
        background:#f6f6f6;
        border-radius:5px;
    }

    .details-container ul li {
        color:black;
        list-style: none;
        padding:.5rem;
    }
</style>
@endsection