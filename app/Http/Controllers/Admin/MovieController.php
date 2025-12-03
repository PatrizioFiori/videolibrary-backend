<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //ROTTA INDEX
    public function index()
    {
        $movies = Movie::with("director", "genres")->get();
        return view("movies.index", compact("movies"));
    }


    //ROTTA SHOW 
    public function show(string $id)
    {
        $movie = Movie::with("director", "genres")->findOrFail($id);
        return view("movies.show", compact("movie"));
    }

    //! ================================= //


    //ROTTA CREATE 
    public function create()
    {
        $directors = Director::all();
        $genres = Genre::all();
        return view("movies.create", compact("directors", "genres"));
    }

    // ROTTA STORE
    public function store(Request $request)
    {
        $moviesData = $request->all();
        $movie = Movie::create($moviesData);

        if ($request->has("genres")) {
            $movie->genres()->attach($request->genres);
        }
        return redirect()->route("admin.movies.index");
    }


    //! ================================= //



    //ROTTA EDIT
    public function edit(string $id)
    {
        $movie = Movie::with("director")->findOrFail($id);
        $directors = Director::all();
        $genres = Genre::all();

        return view("movies.edit", compact("movie", "directors", "genres"));
    }


    // ROTTA UPDATE.
    public function update(Request $request, Movie $movie)
    {
        //aggiorna il record con le modifiche 
        $movie->update($request->all());

        $movie->genres()->sync($request->input('genres', []));

        return redirect()->route('admin.movies.index');
    }





    //! ================================= //

    //ROTTA DESTROY
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route("admin.movies.index");
    }
}
