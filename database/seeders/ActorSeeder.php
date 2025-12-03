<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            Actor::create(['name' => 'Giorgio Clooney']);
            Actor::create(['name' => 'Silvestro Sallone']);
            Actor::create(['name' => 'Roberto De Niro']);
        }
    }
}
