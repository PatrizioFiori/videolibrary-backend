@extends('layouts.admin')

@section("title", "Inserisci nuovo film")

@section("pageTitle")
<h1 class="container">Dettaglio film- Rotta show</h1>
@endsection

@section("content")
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h4 class="card-title text-primary fw-bold">
                        {{ $movie->title }}
                        <small class="text-muted">#{{ $movie->id }}</small>
                    </h4>

                    <p class="card-text text-secondary mb-3">
                        {{ $movie->description }}
                    </p>

                    <p class="card-text text-secondary">
                        @foreach ($movie->genres as $genre)
                            <span class="badge bg-primary me-1">{{ $genre->name }}</span>
                        @endforeach
                    </p>


                    <hr>

                    <p class="mb-2">
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
                    <a href="{{ route('admin.movies.index') }}" class="btn btn-sm btn-outline-secondary">
                        Torna all’elenco
                    </a>
                    <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-sm btn-primary ms-2">
                        Modifica
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection