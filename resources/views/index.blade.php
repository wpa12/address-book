@extends('master')
@section('content')


<div class="container-fluid" id="homepage">
    <div class="row justify-content-center align-items-center" style="height:75%;">
        <div class="col-lg-4 col-md-4 offset-lg-2 offset-md-2">
            <h1>Address Book</h1>
            <h2>Your Contacts, Your Way.</h2>
        </div>
        <div class="col-lg-2">
            <form action="/login" method="post">
              @csrf
              @method('post')
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection