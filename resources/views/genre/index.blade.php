@extends('layout.master')

@section('title1')
Genre Home Page
@endsection

@section('title2')
List Genre   
@endsection

@section('content')
<a href="/genre/create" class="btn btn-primary btn-sm mb-2">Create New(+)</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Genre</th>
      @auth
      <th scope="col">Actions</th>
      @endauth
    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $key => $genre)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $genre->name }}</td>
      @auth
      <td>
        <form action="/genre/{{$genre->id}}" method="POST">
          @csrf
          <a href="/genre/{{$genre->id}}/edit" class="btn btn-secondary btn-sm">Update Genre</a>
          
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete Genre</button>
        </form>
      </td>
      @endauth
    </tr>
    @empty
    <tr>
      <td>No Genre Founds</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection