<?php

namespace Database\Seeders;

use App\Models\Filier;
use Illuminate\Database\Seeder;

class FilierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filier::factory()
       ->count(20)
       ->create();
    }
}
