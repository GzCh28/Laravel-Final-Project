@extends('layout.master')

@section('title1')
Update Genre Page 
@endsection

@section('title2')
Fill the form below
@endsection

@section('content')

<form action="/genre/{{$genre->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label>Input Genre</label>
    <input type="text" name="name" class="form-control" value="{{ $genre->name }}">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection