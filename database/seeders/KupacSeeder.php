<?php

namespace Database\Seeders;

use App\Models\Kupac;
use Illuminate\Database\Seeder;

class KupacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kupac::factory()->count(70)->create();
    }
}
