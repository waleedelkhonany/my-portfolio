<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // Use the HomeFactory to create a record
        \App\Models\Home::factory()->create();
    }
}
