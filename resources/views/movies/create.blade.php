@extends('layouts.admin')

@section("title", "Inserisci nuovo film")

@section("pageTitle")
<h1>Create</h1>
@endsection

@section("content")

<div class="container my-5">

        <h1 class="mb-4 text-center text-primary fw-bold">Inserisci un nuovo film</h1>

        <div class="card shadow-lg border-0">
            <div class="card-body">
                <form action="{{route("admin.movies.store")}}" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- Titolo  --}}

                    {{-- Descrizione  --}}

                    {{-- Release year  --}}

                    {{-- Director --}}
                
                </form>

            </div>
        </div>
</div>

@endsection