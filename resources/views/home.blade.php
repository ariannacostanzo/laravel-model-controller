@extends('templates.main')

@section('main-content')
    @foreach ($movies as $movie)
        <p>{{$movie->title}}</p>
    @endforeach
    Ecco
@endsection