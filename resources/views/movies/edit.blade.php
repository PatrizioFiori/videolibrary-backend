@extends('layouts.admin')

@section("title", "Inserisci nuovo film")

@section("pageTitle")
<h1 class="container">Modifica film - Rotta edit</h1>
@endsection

@section("content")
<div class="container my-5">

        <h1 class="mb-4 text-center text-primary fw-bold">Modifica un film</h1>

        <div class="card shadow-lg border-0">
            <div class="card-body">
                <form action="{{ route('admin.movies.update', $movie->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                     {{-- Titolo  --}}
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label fw-semibold">Titolo film</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$movie->title}}" placeholder="inserisci titolo film">
                        </div>
                    </div>


                    {{-- Descrizione  --}}
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="description" class="form-label fw-semibold">Descrizione film</label>
                            <textarea type="text" class="form-control" name="description" id="description" placeholder="inserisci descrizione film">{{$movie->description}}</textarea>
                        </div>
                    </div>

                    {{-- Release year  --}}
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="release_year" class="form-label fw-semibold">Data uscita film</label>
                            <input type="date" class="form-control" name="release_year" id="release_year" value="{{$movie->release_year}}" placeholder="inserisci data uscita film">
                        </div>
                    </div>

                    {{-- Director --}}
                    <div class="mb-3">
                        <label for="director" class="form-label">Director</label>
                        <select name="director_id" id="director" class="form-select">
                            @foreach ($directors as $director)
                                <option value="{{ $director->id }}" {{$director->id == $movie->director_id ? "selected" : ""}} >{{ $director->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Genres --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Generi</label>
                        <div class="d-flex flex-wrap">
                            @foreach ($genres as $genre)
                                <div class="form-check me-3">
                                    <input 
                                        type="checkbox" 
                                        class="form-check-input" 
                                        name="genres[]" 
                                        id="genre-{{ $genre->id }}" 
                                        value="{{ $genre->id }}"
                                        {{ $movie->genres->contains($genre->id) ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="genre-{{ $genre->id }}">
                                        {{ $genre->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

        
                    {{-- Aggiora e cancella --}}
                    <div class="mb-2">
                        <button type="submit" class="btn btn-warning px-4 py-2"> Modifica </button>
                    </div>
                </form>

                    <form action="{{route("admin.movies.destroy", $movie->id)}}" method= "post">
                        @csrf
                        @method("DELETE")
                    <input type="submit" value="Elimina" class="btn btn-danger px-4 py-2">
                    </form>

            </div>
        </div>
</div>

@endsection