<?php

namespace Database\Seeders;

use App\Models\Slikar;
use Illuminate\Database\Seeder;

class SlikarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slikar::factory()->count(90)->create();
    }
}
