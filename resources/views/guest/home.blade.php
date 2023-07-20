@extends('layouts.app')

@section('title', 'Database')


@section('main-section')


    <div class="container">
        @foreach ($movies as $movie)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"> {{$movie->original_title}}</h6>
                    <span>Movie ID: {{$movie->id}}</span>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>

        @endforeach

    </div>

@endsection
