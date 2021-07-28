@extends('dashboard.master')
@section('content')

<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Update Address</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">

                <form action="/dashboard/address-book/update/{{ $address->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div>
                        <p>You are updating an address for: <strong>{{ $contact->salutation . ' ' .$contact->first_name . ' ' . $contact->middle_name . ' ' . $contact->last_name }}</strong></p>
                    </div>
                    <div class="form-group">
                        <div class="element-container">
                            <label for="address_type_id">Address Type:</label>
                            <select class="form-control form-control" id="address_type_id" name="address_type_id" autocomplete="off" value="{{ old('address_type') }}">
                                <option>-- Please select --</option>
                                @foreach ($address_types as $addr_type)
                                    <option value="{{ $addr_type->id }}" @if($address->address_type_id == $addr_type->id) selected @endif>{{ $addr_type->name }}</option>
                                @endforeach
                            </select>
                            @error('address_type_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="element-container">
                            <label for="first_line">Address Line 1:</label>
                            <input class="form-control form-control" type="text" id="first_line" name="first_line" placeholder="E.g. 102 Example Avenue " autocomplete="off" value="{{ $address->first_line }}">
                            @error('first_line')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="element-container">
                            <label for="second_line">Address Line 2:</label>
                            <input class="form-control form-control" type="text" id="second_line" name="second_line" placeholder="E.g. Filton, Eastville, Downend" autocomplete="off" value="{{ $address->second_line }}">
                            @error('second_line')
                            <div class="alert alert-danger">{{ $message }}</div>                    @enderror
                        </div>
                        
                        <div class="element-container">
                            <label for="city">City:</label>
                            <input class="form-control form-control" type="text" id="city" name="city" placeholder="E.g. London, Manchester, Bristol" autocomplete="off" value="{{ $address->city }}">
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="element-container">
                                <label for="postcode">Postcode:</label>
                                <input type="text" name="postcode" id="postcode" class="form-control" value="{{ $address->postcode }}">
                                @error('postcode')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                        </div>                
                        <div class="element-container">
                            <label for="region">Region:</label>
                            <select class="form-control form-control" id="region" name="region" autocomplete="off" value="{{ $address->region }}">
                                <option>-- Please select --</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country['name'] }}" @if($address->region == $country['name']) selected  @endif>{{ $country['name'] }}</option>
                                @endforeach
                            </select>
                            @error('region')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>        
                        
                        <div class="element_container mt-5">
                            <button type="submit" class="btn btn-primary">Update Address</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection