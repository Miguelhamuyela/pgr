<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Compositon::factory(1)->create();
        \App\Models\Mandate::factory(1)->create();
        \App\Models\President::factory(1)->create();
        \App\Models\Structure::factory(1)->create();
        \App\Models\Defini::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Configuration::factory(1)->create();
        \App\Models\Legislation::factory(1)->create();
    }
}
