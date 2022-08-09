<?php

namespace Database\Seeders;

use App\Models\Stagaire;
use Illuminate\Database\Seeder;

class StagaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stagaire::factory()
        ->count(24)
        ->create();
    }
}
