@extends('dashboard.master')

@section('content')

<div class="row">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">
                        <div>
                            <label for="filter">Filter Results:</label>
                            <input type="text" class="form-control" id="filter" name="filter" placeholder="Filter Results - E.g. Joe Bloggs">
                        </div>
                    </form>
                </div>
            </div>
        <div class="row pt-5 mt-5">
            @isset($records)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email/Tel</th>
                        <th scope="col">Full Address</th>
                        <th scope="col">Address Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr data-contact-name="{{ strtolower($record->contact->first_name . ' ' . $record->contact->last_name) }}" class="record">
                        <th scope="row">{{ $record->id }}</th>
                        <td>{{ $record->contact->first_name . ' ' . $record->contact->middle_name . ' ' . $record->contact->last_name }}</td>
                        <td>
                            <a href="mailto:{{ $record->contact->emaiil }}">{{ $record->contact->email }}</a><br>
                            <a href="tel:{{ $record->contact->tel }}">{{ $record->contact->tel }}</a>
                        </td>
                        <td> 
                            <div>
                                {{ $record->address->first_line  }} <br>
                                @isset($record->address->second_line)
                                {{ $record->address->second_line }} <br>
                                @endisset
                                {{ $record->address->city }} <br>
                                {{ $record->address->postcode }} <br>
                                {{ $record->address->region }}
                            </div>
                            <div>
                                <a href="/dashboard/address-book/update/{{ $record->address->id }}" class="btn btn-primary mt-3 mb-3">Update Address</a>
                            </div>
                        </td>
                        <td>

                            @if($record->address->address_type_id == 1) 
                                {{ 'Personal' }}
                            @elseif($record->address->address_type_id == 2)
                                {{ 'Business' }}
                            @else
                                {{ 'Other' }}
                            @endif

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endisset
        </div>
    </div>
</div>
@push('scripts')

<script>
    
    // assign #filter to filter
    const filter = document.getElementById('filter');
    
    //add event listener for keyup event
    filter.addEventListener('keyup', function (e) {
        
        //get search value and convert it to lowercase
        const val = e.target.value.toLowerCase();

        // create an array of records
        const records = document.querySelectorAll('.record');
    
        //cycle array records
        records.forEach(function(record){
            //assign dataset.contactName attributes to attr
            const attr = record.dataset.contactName;

            // find index of the value and hide or show each result accordingly.
            if(attr.toLowerCase().indexOf(val) != -1){
                record.style.display = 'table-row';
            } else {
                record.style.display = 'none';
            }
        });
    });
</script>

@endpush
@endsection