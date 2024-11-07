<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        
        User::factory()->create([
            'name' => 'Riccardo Trezzi',
            'email' => 'riccardo@trezzi.com',
        ]);
        
        $this->call([
            TypeSeeder::class,
            TechnologySeeder::class,
            ProjectSeeder::class
        ]);
    }
}
