<?php

namespace Database\Seeders;

use App\Models\Formateur;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formateur::factory()
       ->count(10)
       ->create();
    }
}
