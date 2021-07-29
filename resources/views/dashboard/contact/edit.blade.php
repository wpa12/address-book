@extends('dashboard.master')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <form action="/dashboard/contacts/update/{{ $contact->id }}" method="post">
            @csrf
            @method('patch')
            
            <label for="salutation">Salutation:</label>
            <div class="form-group">
                <div class="element-container">
                    <select class="form-control" id="salutation" name="salutation">
                        <option>-- Please select --</option>
                        <option value="Mr" @if($contact->salutation == 'Mr') selected @endif>Mr</option>
                        <option value="Mrs" @if($contact->salutation == 'Mrs') selected @endif>Mrs</option>
                        <option value="Miss" @if($contact->salutation == 'Miss') selected @endif>Miss</option>
                        <option value="Ms" @if($contact->salutation == 'Ms') selected @endif>Ms</option>
                        <option value="Dr" @if($contact->salutation == 'Dr') selected @endif>Dr</option>
                        <option value="Other" @if($contact->salutation == 'Other') selected @endif>Other</option>
                    </select>
                    <div>
                        <input class="form-control" type="text" id="other" placeholder="please specify title">
                    </div>
                    @error('salutation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="element-container">
                    <label for="first_name">First Name:</label>
                    <input class="form-control form-control" type="text" id="first_name" name="first_name" placeholder="First Name" autocomplete="off" value="{{ $contact->first_name }}">
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="element-container">
                    <label for="middle_name">Middle Name(s):</label>
                    <input class="form-control form-control" type="text" id="middle_name" name="middle_name" placeholder="Middle Name" autocomplete="off" value="{{ $contact->middle_name }}">
                    @error('middle_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="element-container">
                    <label for="last_name">Last Name:</label>
                    <input class="form-control form-control" type="text" id="last_name" name="last_name" placeholder="Last Name" autocomplete="off" value="{{ $contact->last_name }}">
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>                
                <div class="element-container">
                    <label for="gender">Gender:</label>
                    <select class="form-control form-control" id="gender" name="gender" autocomplete="off" value="{{ old('gender') }}">
                        <option>-- Please select --</option>
                        <option value="male" @if($contact->gender == 'male') selected @endif>Male</option>
                        <option value="female" @if($contact->gender == 'female') selected @endif>Female</option>
                        <option value="n/a" @if($contact->gender == 'n/a') selected @endif>N/A</option>
                    </select>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="element-container">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{ $contact->dob }}">
                    @error('dob')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="element-container">
                    <label for="email">Email Address:</label>
                    <input class="form-control form-control" id="email" name="email" type="text" placeholder="E.g. john.doe@example.com" value="{{ $contact->email }}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="element-container">
                    <label for="tel">Tel:</label>
                    <input class="form-control form-control" id="tel" name="tel" type="text" placeholder="E.g. 07xxxxxxxxxxx" value="{{ $contact->tel }}">
                    @error('tel')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                
                <div class="element-container">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" style="width:100%; height:200px; padding:10px;" placeholder="e.g. How do you know this contact?">{{ $contact->description }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                
                
                <div>
                    <button type="submit" class="btn btn-primary">Update Contact</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    let salutation = document.querySelector('#salutation');
    var other = document.querySelector('#other');
    salutation.addEventListener('change', function() {
        
        if(salutation.value == 'other'){
            other.style.display='block';
        } else {
            document.querySelector('#other').style.display='none';
        }
    });
</script>
@endpush
@endsection