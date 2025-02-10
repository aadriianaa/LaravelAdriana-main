<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Champion;

class ChampionsSeeders extends Seeder
{
    public function run()
    {
        Champion::factory()->count(10)->create(); // Crear 10 campeones con datos aleatorios
    }
}
