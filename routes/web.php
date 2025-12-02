<?php

use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(["auth", "verified"])
    ->prefix("admin")
    ->name("admin")
    ->group(function () {
        Route::get("/movies", [MovieController::class, "index"])->name("movies.index");
        Route::get("/movies/{movie}", [MovieController::class, "show"])->name("movies.show");
        Route::get("/movies/create", [MovieController::class, "create"])->name("movies.create");
        Route::get("movies/{movie}/edit", [MovieController::class, "edit"])->name("movies.edit");
    });



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
