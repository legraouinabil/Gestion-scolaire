<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ModulsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modul::factory()
       ->count(24)
       ->create();
    }
}
