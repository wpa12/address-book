@extends('dashboard.master')
@section('content')

<style>
    
    .element-container {
        padding-top:10px;
        padding-bottom:10px;
    }
    
    label {
        font-weight: 500;
    }
    
    input#other {
        display:none;
    }
    
</style>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <form action="/dashboard/contacts/create" method="post">
            @csrf
            @method('post')
            
            <label for="salutation">Salutation:</label>
            <div class="form-group">
                <div class="element-container">
                    <select class="form-control" id="salutation" name="salutation" value="{{ old('salutation') }}">
                        <option>-- Please select --</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                        <option value="other">Other</option>
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
                    <input class="form-control form-control" type="text" id="first_name" name="first_name" placeholder="First Name" autocomplete="off" value="{{ old('first_name') }}">
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="element-container">
                    <label for="middle_name">Middle Name(s):</label>
                    <input class="form-control form-control" type="text" id="middle_name" name="middle_name" placeholder="Middle Name" autocomplete="off" value="{{ old('middle_name') }}">
                    @error('middle_name')
                    <div class="alert alert-danger">{{ $message }}</div>                    @enderror
                </div>
                
                <div class="element-container">
                    <label for="last_name">Last Name:</label>
                    <input class="form-control form-control" type="text" id="last_name" name="last_name" placeholder="Last Name" autocomplete="off" value="{{ old('last_name') }}">
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>                
                <div class="element-container">
                    <label for="gender">Gender:</label>
                    <select class="form-control form-control" id="gender" name="gender" autocomplete="off" value="{{ old('gender') }}">
                        <option>-- Please select --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="na">N/A</option>
                    </select>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="element-container">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
                    @error('dob')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="element-container">
                    <label for="email">Email Address:</label>
                    <input class="form-control form-control" id="email" name="email" type="text" placeholder="e.g. john.doe@example.com" value="{{ old('email') }}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                
                <div class="element-container">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" style="width:100%; height:200px;" placeholder="e.g. How do you know this contact?" value="{{ old('description') }}"></textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                
                
                <div>
                    <button type="submit" class="btn btn-primary">Create Contact</button>
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