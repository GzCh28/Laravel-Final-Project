@extends('layout.master')

@section('title1')
Profile Page
@endsection

@section('content')
<a href="\" class="btn btn-secondary btn-sm">Back to Dashboard</a>
<hr>

@guest
<h5>You are not login any account right now<br>Click Login or Sign Up below</h5>
<a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
<a href="{{ route('register') }}" class="btn btn-info btn-sm">Sign Up<
@endguest

@auth
<form method="POST" action="/profile/{{ $profile->id }}">
  @csrf
  @method('PUT')
  <div class="row mb-3">
      <label class="col-md-4 col-form-label text-md-end">Name</label>
      <input type="text" placeholder="Maksimal 15 karakter" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autofocus>

      @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
  </div>

  <div class="row mb-3">
      <label class="col-md-4 col-form-label text-md-end">Age</label>
      <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $profile->age }}">

      @error('age')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
  </div>

  <div class="row mb-3">
      <label class="col-md-4 col-form-label text-md-end">Biodata</label>
      <textarea type="text" class="form-control @error('bio') is-invalid @enderror" name="bio">{{ $profile->bio }}</textarea>

      @error('bio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
  </div>

  <div class="row mb-3">
      <label class="col-md-4 col-form-label text-md-end">Email Address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">

      @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
  </div>
  <hr>
  <div class="row mb-0 my-3">
    <button type="submit" class="btn btn-primary mr-3">
      Update Profile
    </button>
    <form action="#">
      <button type="submit" class="btn btn-warning mx-3">
        Change Password
      </button>
    </form>
  </div>
  <div class="row mb-0 my-3">
    <a class="btn btn-danger"href="{{ route('logout') }}"
       onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </div>
</form>
@endauth
@endsection