@section('title')
    Add data
@endsection
@extends('layouts.app')
@section('content')

<form action="add" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="Name" >
      <span class="text-danger">@error('name')
        {{$message}}
      @enderror</span>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" >
        <span class="text-danger">@error('email')
          {{$message}}
        @enderror</span>
      </div>
    <div class="mb-3">
      <label for="Address" class="form-label">Address</label>
      <input type="Address" name="address" class="form-control" id="Address" >
      <span class="text-danger">@error('address')
        {{$message}}
      @enderror</span>
    </div>
   
    <button type="submit" class="btn btn-outline-secondary">Submit</button>
  </form>
@endsection