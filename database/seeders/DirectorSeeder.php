<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::create([
            'name' => 'Mario Rossi',
        ]);

        Director::create([
            'name' => 'Giulia Bianchi',
        ]);

        Director::create([
            'name' => 'Luca Verdi',
        ]);

        Director::create([
            'name' => 'Anna Neri',
        ]);
    }
}
