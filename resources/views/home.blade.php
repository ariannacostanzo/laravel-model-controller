@extends('templates.main')

@section('main-content')
    <h3>I film presenti oggi al cinema sono:</h3>
    <div id="movies" class="row row-cols-4 my-5">

        @foreach ($movies as $movie)
        <div class="movie-card col">
            <div class="content-card">
                <p class="movie-title"><strong>Titolo: </strong>{{$movie->title}}</p>
                <p class="movie-original-title"><strong>Titolo originale: </strong>{{$movie->original_title}}</p>
                <p class="movie-nationality"><strong>Nazionalità: </strong>{{$movie->nationality}}</p>
                <p class="movie-date"><strong>Data di uscita: </strong>{{$movie->date}}</p>
                <p class="movie-vote"><strong>Voto: </strong>{{$movie->vote}}</p>
            </div>
        </div>
        
        @endforeach
    </div>
@endsection