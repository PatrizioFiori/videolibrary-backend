@extends('layouts.admin')

@section("title", "Inserisci nuovo film")

@section("pageTitle")
<h1 class="container">Lista film - Rotta index</h1>
@endsection

@section("content")
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('admin.movies.create') }}" class="btn btn-success">+ Add </a>
    </div>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    <div class="card-body">
                        <h5 class="card-title text-primary fw-bold">
                            {{ $movie->title }}
                        </h5>
                        <p class="card-text text-secondary">
                            {{ $movie->description }}
                        </p>
                        <p class="card-text text-secondary">
                            @foreach ($movie->genres as $genre)
                                <span class="badge bg-primary me-1">{{ $genre->name }}</span>
                            @endforeach
                        </p>

                        <hr>
                        <p class="mb-1">
                            <span class="badge bg-info-subtle text-dark">
                                Anno: {{ $movie->release_year }}
                            </span>
                        </p>
                        <p class="mb-0">
                            <span class="badge bg-secondary">
                                Regista: {{ $movie->director?->name ?? 'Nessun regista' }}
                            </span>
                        </p>
                    </div>
                    <div class="card-footer bg-light border-0 text-center">
                        <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-sm btn-outline-primary">
                            Dettagli
                        </a>
                        <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-sm btn-primary ms-2">
                            Modifica
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection