@extends('layout.master')

@section('title1')
Film Detail Page
@endsection

@section('title2')
Detail about Film: {{ $film->title}}
@endsection

@section('content')
<img src="{{ asset('poster_folder/' . $film->poster) }}" width="auto" height="300px" class="mb-3">
<hr class="horizontal-line">
<h5>Film Name:</h5>
<p>{{ $film->title }}</p>
<h5>Genre:</h5>
<p>{{ $film->genre_id }}</p>
<h5>Release Year:</h5>
<p>{{ $film->release_year }}</p>
<h5>Summary:</h5>
<p>{{ $film->summary }}</p>
<hr class="horizontal-line mt-3">
<a href="/film" class="btn btn-primary btn-sm">Back to Film List</a>
@endsection