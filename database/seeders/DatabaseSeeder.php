<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\HomeFactory;
use Database\Seeders\HomeSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // ... other seeders if you have them
        $this->call(HomeSeeder::class);
    }
}
