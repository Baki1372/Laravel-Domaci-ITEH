<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SlikarSeeder;
use Database\Seeders\KupacSeeder;
use Database\Seeders\SlikaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $slikarS = new SlikarSeeder();
        $kupacS = new KupacSeeder();
        $slikaS = new SlikaSeeder();

        $slikarS->run();
        $kupacS->run();
        $slikaS->run();
    }
}
