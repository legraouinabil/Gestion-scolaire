<?php

namespace Database\Seeders;

use App\Models\Group;
use BaconQrCode\Renderer\Color\Gray;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::factory()
       ->count(60)
       ->create();
    }
}
