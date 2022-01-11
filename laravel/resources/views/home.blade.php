@extends('layouts.app')

@section('content')

@forelse ($movies as $movie)

<div class="movie_title">
    <h3>{{$movie->title}}</h3>
    <div class="original_title">
        <p>{{$movie->original_title}}</p>
    </div>
    <div class="nationality">
        <p>{{ $movie->nationality }}</p>
    </div>
    <div class="date_and_vote">
        <p>{{ $movie->date }} | {{ $movie->vote }}</p>
    </div>
</div>

@empty
   <p class="alert"> Sorry no movies available</p>
@endforelse

@endsection