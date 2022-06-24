@extends('layout.main')

@section('content')

<div class="container">
    <h1>Movies</h1>
    @foreach ( $movies as $movie)
    <span>{{$movie->title}}</span>
    @endforeach
</div>
@endsection