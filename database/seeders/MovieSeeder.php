<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Film 1
        $movie1 = new Movie();
        $movie1->title = "Il Viaggio Immaginario";
        $movie1->description = "Un'avventura fantasy attraverso mondi sconosciuti.";
        $movie1->release_year = "2000-12-12"; // formato YYYY-MM-DD
        $movie1->director_id = 1; // Assicurati che esista un director con id=1
        $movie1->save();

        // Film 2
        $movie2 = new Movie();
        $movie2->title = "Ombre sul Mare";
        $movie2->description = "Un thriller ambientato in una città costiera.";
        $movie2->release_year = "2010-05-20";
        $movie2->director_id = 2; // Assicurati che esista un director con id=2
        $movie2->save();

        // Film 3
        $movie3 = new Movie();
        $movie3->title = "Risveglio Digitale";
        $movie3->description = "Un dramma moderno sulla tecnologia e le relazioni umane.";
        $movie3->release_year = "2022-09-15";
        $movie3->director_id = 3; // Assicurati che esista un director con id=3
        $movie3->save();
    }
}
