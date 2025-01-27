@extends('layout.master')

@section('title1')
Create Genre Page 
@endsection

@section('title2')
Fill the form below
@endsection

@section('content')

<form action="/genre" method="POST">
  @csrf
  <div class="mb-3">
    <label>Input Genre</label>
    <input type="text" name="name" class="form-control">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection