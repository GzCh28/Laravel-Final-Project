@extends('layout.master')

@section('title1')
List Film Page
@endsection

@section('content')  
<h4>Genre: {{ $genre->name }}</h4><hr>

<h5>List Film:</h5>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    @forelse ($genre->toFilmTable as $item)
      
        <div class="col border my-3 p-3">
          <div class="card h-100">
            <img src="{{ asset('poster_folder/' . $item->poster)}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Title: {{ $item->title }} ({{ $item->release_year }})</h5>
            </div>
          </div>
        </div> 
      
    @empty
    <p class="mb-3">List Film is empty</p>
    <a href="/film" class="btn btn-info btn-sm mt-5 ">Go to Film Home Page</a>
    @endforelse
  </div>

@endsection