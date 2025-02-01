@extends('layout.master')

@section('title1')
Add Review Film: {{ $film->title }}
@endsection

@section('content')
<div>
  <img src="{{ asset('poster_folder/' . $film->poster)}}" class="my-2" width="100px">
  <h5>What's your thought about this film?</h5><hr>

  <form action="/review/{{ $film->id }}" method="POST">
    @csrf
    <div class="my-2">
      <span>
        <label>Film Rate: (1-10)</label>
        <input type="number" class="col-md-1 mx-3" name="rate" max="10" min="1">
      </span>
    </div>

    <textarea type="text" style="width: 100%" placeholder="Share your review here (Max: 1500 character)" name="content"></textarea>
    <button type="submit" class="btn btn-secondary btn-sm mt-2 mb-5">Share</button>
  </form><hr>

  <a href="/film/{{ $film->id }}" class="btn btn-info btn-sm ">Back to Detail Film</a>
</div>
@endsection