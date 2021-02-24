@extends('layouts.main')

@section('header')
    <a href="#" class="btn btn-danger float-right">Elimina</a>
@endsection

@section('content')
    <main class="container my-5">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('img/movie_' . $movie->id . '.jpg') }}" alt="">
            </div>

            <div class="col-6">
                <p>{{ $movie->title}}</p>
                <p>{{ $movie->director}}</p>
                <p>{{ $movie->year}}</p>
                <p>{{ $movie->genres}}</p>
            </div>
        </div>
    </main>
@endsection

@section('footer')
     <div class="text-right">
         <a href="{{ route('movies.index') }}" class="btn btn-primary">Torna all'elenco Film</a>
     </div>
@endsection