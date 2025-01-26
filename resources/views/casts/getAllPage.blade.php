@extends('layout.master')

@section('title1')
Cast List Page
@endsection

@section('title2')
List Data Cast   
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm mb-2">Create (+)</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Biography</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($casts as $key => $cast)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $cast->name }}</td>
      <td>{{ $cast->age }}</td>
      <td>
        <form method="POST">
          @csrf
          @method('DELETE')
          <a href="/cast/{{$cast->id}}" class="btn btn-info btn-sm">Detail Biography</a>
          <a href="/cast/recreate/{{$cast->id}}" class="btn btn-secondary btn-sm">Update Cast</a>
          <a href="/cast/delete/{{$cast->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete Cast</a>
      </td>
    </tr>
    @empty
    <tr>
      <td>No Cast Founds</td>
    </tr>
    @endforelse
  </tbody>
</table>

@endsection