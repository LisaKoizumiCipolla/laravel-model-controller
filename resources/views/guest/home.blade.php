@extends('layouts.app')

@section('title', 'Database')


@section('main-section')

    @foreach ($movies as $movie)

        <div>
            <h2>
                {{$movie->title}}
            </h2>
            <h3>
                {{$movie->original_title}}
            </h3>
            <ul>
                <li>
                    {{$movie->id}}
                </li>
                <li>
                    {{$movie->nationality}}
                </li>
                <li>
                    {{$movie->date}}
                </li>
                <li>
                    {{$movie->vote}}
                </li>
            </ul>
        </div>

    @endforeach


@endsection
