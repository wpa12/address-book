@extends('dashboard.master')

@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            @isset($records)
                @foreach ($records as $record)
                    {{ $record->contact->first_name . ' ' . $record->address->first_line}}
                @endforeach
            @endisset
        </div>
    </div>
</div>

@endsection