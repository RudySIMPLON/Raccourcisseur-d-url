@extends('layouts.base')

@section('content')

<h1>The best url Shortener out there</h1>

<form action="/" method="POST">
     {{csrf_field()}}
    <input type="text" name="url" placeholder="Entrer votre url">
    <input type="submit" name="" value="Shorten url">
    
</form>
@endsection