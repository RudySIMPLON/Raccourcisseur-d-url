@extends('layouts.base')

@section('content')

<h1>The best url Shortener out there</h1>

<form action="" method="POST">
    <input type="text" placeholder="Entrer votre url">
    <input type="submit" name="url" value="Shorten url">
    
</form>
@endsection