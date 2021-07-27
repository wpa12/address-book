@extends('master')
@section('content')

<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="e.g. john.doe@example.com">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="secure password">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection