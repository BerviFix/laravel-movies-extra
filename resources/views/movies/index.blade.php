@extends('layouts.main')

@section('header')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">MaiMovies</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link" href="#">Aggiungi </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">MaiMovies</h1>
            <p class="lead">"L'unica web app che ti mostra solo film belli"</p>
        </div>
    </div>
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <main>
        <div class="container d-flex flex-wrap">
            @foreach ($movies as $movie)
                <div class="card my-3" style="width: 20%;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $movie->title }}</h3>
                        <h5 class="card-title">{{ $movie->director }}</h5>
                        <p class="card-text">{{ $movie->year }}</p>
                        <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary">Info</a>
                        <a href="#" class="btn btn-danger">Elimina</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
