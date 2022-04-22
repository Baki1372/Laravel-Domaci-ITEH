<?php

namespace Database\Seeders;

use App\Models\Slika;
use Illuminate\Database\Seeder;

class SlikaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slika::factory()->count(50)->create();
    }
}
