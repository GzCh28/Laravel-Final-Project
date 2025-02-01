@extends('layout.master')

@section('title1')
Film Detail Page
@endsection

@section('title2')
Detail about Film: {{ $film->title}}
@endsection

@section('content')
<div class="border p-3">
  <img src="{{ asset('poster_folder/' . $film->poster) }}" width="auto" height="300px" class="mb-3">
  <hr class="horizontal-line">
  <h5>Film Name:</h5>
  <p>{{ $film->title }}</p>
  <h5>Genre:</h5>
  <p>{{ $film->toGenreTable->name }}</p>
  <h5>Release Year:</h5>
  <p>{{ $film->release_year }}</p>
  <h5>Summary:</h5>
  <p>{{ $film->summary }}</p>
</div>

<div class="border p-3 my-3">
  <h6 class="m-1">Reviews</h6>
    <div class="container" >
      @forelse ($film->toReviewTable as $item)
      <div class="media border my-2 p-2" style="font-size: x-small">
        <span>
          <img src="https://artikel.rumah123.com/wp-content/uploads/sites/41/2023/09/12160753/gambar-foto-profil-whatsapp-kosong.jpg" class="mt-1 mb-2" width="30px">
          <br><p>{{ $item->toUserTable->name }}</p>
        </span>

        <div class="media-body mx-2" style="font-size: x-small">
          <span>
            <label>Rate:</label>
            {{ $item->point }}
          </span><br>
          <span>
            <label>Review:</label>
            {{ $item->content }}
          </span><br>
          @auth
            @if (Auth::user()->id === $item->toUserTable->id)
            <form action="/review/delete/{{ $film->id }}/{{ $item->id}}">
              <button type="submit" class="btn btn-secondary mt-2" style="font-size: 7px; width: 100px;">Delete Your Review</button>
            </form>
            @endif
          @endauth
        </div>
      </div>
      @empty
      <div class="mt-2" style="font-size: small">
        No Reviews Yet
      </div>
      @endforelse 
    </div>  


  @auth
    @if ($reviewYet->isempty())
      <a href="/review/create/{{ $film->id }}" class="btn btn-info btn-xs mt-3">Share review</a>  
    @endif
  @endauth
</div>

<a href="/film" class="btn btn-primary btn-sm">Back to Film List</a>
@endsection