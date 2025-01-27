@extends('layout.master')

@section('title1')
Edit Film Page  
@endsection

@section('title2')
Update the form below    
@endsection

@section('content')
<form action="/film/{{ $film->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ $film->title }}">
  </div>
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Genre</label>
    <select name="genre_id" class="form-control">
      @forelse ($genres as $genre)
          @if ($film->genre_id == $genre->id)
            <option value="{{$genre->id}}" selected>{{$genre->name}}</option>
          @else
            <option value="{{$genre->id}}">{{$genre->name}}</option>
          @endif     
      @empty
          <option>No Genre Founds</option>
      @endforelse
    </select>
  </div>
  @error('genre_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Release Year</label>
    <input type="number" name="release" class="form-control" value="{{ $film->release_year }}">
  </div>
  @error('release')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Summary</label>
    <textarea type="text" name="summary" class="form-control">{{ $film->summary }}</textarea>
  </div>
  @error('summary')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Poster</label>
    <input type="file" name="poster" class="form-control">
  </div>
  @error('poster')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <hr class="horizontal-line mt-3">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection