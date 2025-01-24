@extends('layout.master')

@section('title1')
Create Cast Page  
@endsection

@section('title2')
Fill the from below    
@endsection

@section('content')

<form action="/cast" method="POST">
  @csrf
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Age</label>
    <input type="text" name="age" class="form-control">
  </div>
  @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Biography</label>
    <input type="text" name="biography" class="form-control">
  </div>
  @error('biography')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection