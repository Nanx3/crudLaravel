@extends('layout')
@section('title', 'Create employee')
@section('content')

<form method="POST" action="{{ route('employee.store') }}" >
   @csrf
  <div class="form-group">
    <label for="first_name">First name</label>
    <input name="first_name" type="text" class="form-control" id="first_name" value="{{ old('first_name') }}">
  </div>
   
   @error('first_name')
     <div class="alert alert-danger">{{ $message }}</div>
   @enderror
    
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input name="last_name" type="text" class="form-control" id="last_name" value="{{ old('last_name') }}">
  </div>  

   @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
   @enderror 
   
   
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" class="form-control" id="email" value="{{ old('email') }}">
  </div>      

    @error('email')
     <div class="alert alert-danger">{{ $message }}</div>
   @enderror 
   
   
  <div class="form-group">
    <label for="phone_number">Phone number</label>
    <input name="phone_number" type="text" class="form-control" id="phone_number" value="{{ old('phone_number') }}">
  </div>  

   @error('phone_number')
     <div class="alert alert-danger">{{ $message }}</div>
   @enderror 
   
   
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection