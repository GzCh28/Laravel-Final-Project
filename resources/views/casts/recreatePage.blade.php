@extends('layout.master')

@section('title1')
Cast Update Page
@endsection

@section('title2')
Update Form Below
@endsection

@section('content')

<form action="/cast/update/{{$castData->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{$castData->name}}">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Age</label>
    <input type="text" name="age" class="form-control" value="{{$castData->age}}">
  </div>
  @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Biography</label>
    <input type="text" name="biography" class="form-control" value="{{$castData->bio}}">
  </div>
  @error('biography')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection