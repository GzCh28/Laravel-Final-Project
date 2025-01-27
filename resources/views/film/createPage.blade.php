@extends('layout.master')

@section('title1')
Create Film Page  
@endsection

@section('title2')
Fill the form below    
@endsection

@section('content')
<form action="/film" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control">
  </div>
  @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Genre</label>
    <select name="genre_id" class="form-control">
      @forelse ($genre as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
      @empty
          <option value="">No Genre Founds</option>
      @endforelse
    </select>
  </div>
  @error('genre_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Release Year</label>
    <input type="number" name="release" class="form-control">
  </div>
  @error('release')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="mb-3">
    <label>Summary</label>
    <textarea type="text" name="summary" class="form-control"></textarea>
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