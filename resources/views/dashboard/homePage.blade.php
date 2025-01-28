@extends('layout.master')

@section('title1')
Dashboard Page 
@endsection

@section('content')
@guest
    <h5>You are not login<br>Click Login or Sign Up below</h5>
    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
    <a href="{{ route('register') }}" class="btn btn-info btn-sm">Sign Up</a>
@endguest

@auth
    <h5>Hello {{ Auth::user()->name }}<br>What do you want to do?</h5>
@endauth
@endsection