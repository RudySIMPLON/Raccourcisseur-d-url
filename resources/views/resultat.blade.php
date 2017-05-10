@extends('layouts.base')
@section('content')
<h1>Voici votre Url raccourcis</h1>
<a href="{{config('app.url')}}/{{$shortened}}">
	{{config('app.url')}}/{{$shortened}}
</a>
@stop