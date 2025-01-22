@extends('layout.master')

@section('title1')
Buat Account Baru!
@endsection

@section('title2')
Sign Up Form
@endsection
  

@section('content')
<form action="/register" method="post">
  @csrf
  <label>First name:</label><br>
  <input type="text" name="firstname" placeholder="Masukan Nama Anda"required><br><br>
  <label>Last name:</label><br>
  <input type="text" name="lastname"><br><br>
  <label>Gender:</label><br>
  <input type="radio">Male<br>
  <input type="radio">Female<br>
  <input type="radio">Other<br><br>

  <label>Nationality:</label><br>
  <select name="nation">
    <option value="indonesian">Indonesian</option>
    <option value="malaysian">Malaysian</option>
    <option value="singaporean">Singaporean</option>
    <option value="australian">Australian</option>
    <option value="thailand">Thailand</option>
  </select><br><br>

  <label>Language:</label><br>
  <input type="checkbox">Bahasa Indonesia<br>
  <input type="checkbox">English<br>
  <input type="checkbox">Other<br><br>

  <label>Bio:</label><br>
  <textarea name="message" rows="10" cols="10"></textarea><br><br>

  <input type="submit" formaction="/welcome" value="Sign Up">
</form><br><br>
<a href="/home">Back</a>  
@endsection
    
