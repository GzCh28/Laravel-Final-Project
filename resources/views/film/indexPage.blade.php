@extends('layout.master')

@section('title1')
Film Home Page
@endsection

@section('title2')
List Film 
@endsection

@section('content')
<a href="/film/create" class="btn btn-primary btn-sm mb-2">Create New Film(+)</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Genre</th>
      <th scope="col">Release Year</th>
      <th scope="col">Summary</th>
      <th scope="col">Poster</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @forelse ($films as $key => $film)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $film->title }}</td>
      <td>{{ $film->genre_id }}</td>
      <td>{{ $film->release_year }}</td>
      <td>{{ Str::limit($film->summary, 100) }}</td>
      <td>
        <img src="{{ asset('poster_folder/' . $film->poster) }}" width="auto" height="100px" class="mb-2"><br>
        <a href="/film/{{$film->id}}" style="font-size: small">Klik untuk Detail Poster</a>
      </td>
      <td>
        <form action="/film/{{$film->id}}" method="POST">
          @csrf
          <a href="/film/{{$film->id}}" class="btn btn-info btn-sm mx-1 my-1 w-75">Detail Film</a>
          <a href="/film/{{$film->id}}/edit" class="btn btn-secondary btn-sm mx-1 my-1 w-75">Update Film</a>
          @method('Delete')
          <button class="btn btn-danger btn-sm mx-1 my-1 w-75">Delete Film</button> 
      </td>
    </tr>
    @empty
    <tr>
      <td>No Film Founds</td>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection