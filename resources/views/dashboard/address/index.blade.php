@extends('dashboard.master')

@section('content')
    <div class="col s12">
        @foreach ($address as $addr)
            <div class="card">
                <div>{{ 'Contact' }}</div>
                <div>{{ 'owner' }}</div>
                <div></div>
            </div>
        @endforeach
    </div>
@endsection