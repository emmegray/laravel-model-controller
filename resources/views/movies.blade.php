@extends('layout.main')

@section('content')

<div class="container">
    <h1>Movies:</h1>
    <div class="row">

        @foreach ( $movies as $movie)
        <div class="col-4">
            <div class="card my-3" style="width: 18rem;">
                <div class="card-body">
                    <em>{{$movie->original_title}}</em> (<span>{{str_split($movie->date, "4")[0]}}</span>)
                    <h5>{{$movie->title}}</h5>
                    <h6>{{$movie->nationality}}</h6>

                    <b>Rating: {{$movie->vote}}</b>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection