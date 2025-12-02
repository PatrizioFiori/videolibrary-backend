@extends('layouts.admin')

@section("title", "Inserisci nuovo film")

@section("pageTitle")
<h1>Index</h1>
@endsection

@section("content")
<div class="container mt-4">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>
                        <p class="text-muted">
                            <strong>Anno:</strong> {{ $movie->release_year }}
                        </p>
                        <p class="text-muted">
                            <strong>Regista:</strong> {{ $movie->director?->name ?? 'Nessun regista' }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection