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
   
        \App\Models\User::factory(1)->create();
        \App\Models\Configuration::factory(1)->create();
        \App\Models\Dnpcc::factory(1)->create();
        \App\Models\Dniap::factory(1)->create();
        \App\Models\Senra::factory(1)->create();
    }
}
