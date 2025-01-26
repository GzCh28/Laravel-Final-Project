@extends('layout.master')

@section('title1')
Cast Detail Page
@endsection

@section('title2')
Detailed Cast Information
@endsection

@section('content')
<div class="card">
  <div class="card-body">
    <h5>Name:</h5>
    <p>{{ $cast->name }}</p>
    <h5>Age:</h5>
    <p>{{ $cast->age }}</p>
    <h5>Biography:</h5>
    <p>{{ $cast->bio }}</p>
  </div>
</div>
@endsection